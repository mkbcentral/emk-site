document.addEventListener('DOMContentLoaded', function() {
  // Set current date
  const now = new Date();
  const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  const currentDateElement = document.getElementById('currentDate');
  if (currentDateElement) {
    currentDateElement.textContent = now.toLocaleDateString('fr-FR', options);
  }
    
    // Tab switching functionality
    const tabButtons = document.querySelectorAll('.settings-tab-btn');
    const tabContents = document.querySelectorAll('.settings-tab');

    tabButtons.forEach(button => {
      button.addEventListener('click', function () {
        // Remove active class from all buttons
        tabButtons.forEach(btn => {
          btn.classList.remove('active-tab', 'text-blue-600', 'border-blue-600');
          btn.classList.add('text-gray-500', 'border-transparent');
        });

        // Add active class to clicked button
        this.classList.add('active-tab', 'text-blue-600', 'border-blue-600');
        this.classList.remove('text-gray-500', 'border-transparent');

        // Hide all tab contents
        tabContents.forEach(content => {
          content.classList.add('hidden');
        });

        // Show the target tab content
        const targetTab = this.getAttribute('data-target');
        document.getElementById(targetTab).classList.remove('hidden');
      });
    });
  
  // Initialize TinyMCE editors
  if (document.querySelector('.rich-text-editor')) {
    tinymce.init({
      selector: '.rich-text-editor',
      plugins: 'lists link image table code help wordcount',
      toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image | table | code',
      height: 250,
      menubar: false,
      branding: false,
      language: 'fr_FR',
      placeholder: function(el) {
        return el.getAttribute('placeholder');
      }
    });
  }
  
  // Initialize TinyMCE for all textareas in the new project form
  if (document.getElementById('resourceEstimate')) {
    tinymce.init({
      selector: '#resourceEstimate, #equipmentNeeds, #safetyMeasures, #permits',
      plugins: 'lists link image table code help wordcount',
      toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image | table | code',
      height: 200,
      menubar: false,
      branding: false,
      language: 'fr_FR',
      placeholder: function(el) {
        return el.getAttribute('placeholder');
      }
    });
  }
  
  // Set default dates for new project form
  const startDateInput = document.getElementById('startDate');
  const endDateInput = document.getElementById('endDate');
  
  if (startDateInput) {
    // Set default start date to today
    const today = new Date().toISOString().split('T')[0];
    startDateInput.value = today;
  }
  
  if (endDateInput) {
    // Set default end date to 1 year from now
    const nextYear = new Date();
    nextYear.setFullYear(nextYear.getFullYear() + 1);
    endDateInput.value = nextYear.toISOString().split('T')[0];
  }

  // Logout button functionality
  document.getElementById('logoutBtn').addEventListener('click', function() {
    if(confirm('Êtes-vous sûr de vouloir vous déconnecter?')) {
      alert('Déconnexion en cours...');
      // Here you would typically redirect to login page or call a logout API
      // window.location.href = '/login';
    }
  });

  // Mobile sidebar toggle
  const sidebarToggle = document.getElementById('sidebarToggle');
  const mobileSidebar = document.getElementById('mobileSidebar');
  const closeSidebar = document.getElementById('closeSidebar');

  sidebarToggle.addEventListener('click', function() {
    mobileSidebar.classList.remove('-translate-x-full');
  });

  closeSidebar.addEventListener('click', function() {
    mobileSidebar.classList.add('-translate-x-full');
  });

  mobileSidebar.addEventListener('click', function(event) {
    if (event.target === mobileSidebar) {
      mobileSidebar.classList.add('-translate-x-full');
    }
  });

 
  // Task checkboxes
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      const textElement = this.nextElementSibling.querySelector('p:first-child');
      if (this.checked) {
        textElement.classList.add('line-through', 'text-gray-400');
      } else {
        textElement.classList.remove('line-through', 'text-gray-400');
      }
    });
  });

  // Sidebar dropdown functionality
  const sidebarItems = document.querySelectorAll('.sidebar-item');
  sidebarItems.forEach(item => {
    const toggle = item.querySelector('div');
    const submenu = item.querySelector('.sidebar-submenu');
    const arrow = item.querySelector('.sidebar-arrow');
    
    toggle.addEventListener('click', function() {
      submenu.classList.toggle('hidden');
      arrow.classList.toggle('rotate-180');
    });
  });

  // Mobile sidebar dropdown functionality
  const mobileSidebarItems = document.querySelectorAll('.sidebar-item-mobile');
  mobileSidebarItems.forEach(item => {
    const toggle = item.querySelector('div');
    const submenu = item.querySelector('.sidebar-submenu-mobile');
    const arrow = item.querySelector('.sidebar-arrow-mobile');
    
    toggle.addEventListener('click', function() {
      submenu.classList.toggle('hidden');
      arrow.classList.toggle('rotate-180');
    });
  });

  // Add event listeners for report-related elements if they exist
  const reportTypeSelect = document.querySelector('select[name="reportType"]');
  if (reportTypeSelect) {
    reportTypeSelect.addEventListener('change', function() {
      // Code to filter reports by type would go here
      console.log('Report type changed:', this.value);
    });
  }
  
  // Download report functionality
  const downloadButtons = document.querySelectorAll('button[title="Télécharger"]');
  if (downloadButtons.length > 0) {
    downloadButtons.forEach(button => {
      button.addEventListener('click', function() {
        const reportRow = this.closest('tr');
        const reportName = reportRow.querySelector('.text-sm.font-medium.text-gray-900').textContent;
        alert('Téléchargement du rapport: ' + reportName);
      });
    });
  }

  
  // Removed display mode and accent color functionality that was in the parametres.html script tag
  // as it's now handled by theme.js
  
  // Notification dropdown functionality
  const notificationBtn = document.getElementById('notificationBtn');
  const notificationDropdown = document.getElementById('notificationDropdown');
  
  if (notificationBtn && notificationDropdown) {
    notificationBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      if (notificationDropdown.classList.contains('scale-0')) {
        notificationDropdown.classList.remove('scale-0', 'opacity-0');
        notificationDropdown.classList.add('scale-100', 'opacity-100');
      } else {
        notificationDropdown.classList.add('scale-0', 'opacity-0');
        notificationDropdown.classList.remove('scale-100', 'opacity-100');
      }
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
      if (!notificationDropdown.contains(e.target) && !notificationBtn.contains(e.target)) {
        notificationDropdown.classList.add('scale-0', 'opacity-0');
        notificationDropdown.classList.remove('scale-100', 'opacity-100');
      }
    });
  }

  // Settings save button handler
  const saveAllSettingsBtn = document.getElementById('saveAllSettings');
  if (saveAllSettingsBtn) {
    saveAllSettingsBtn.addEventListener('click', function() {
      alert('Toutes les modifications ont été enregistrées avec succès!');
    });
  }
});
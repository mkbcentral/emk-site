// Theme manager for Cabinet Minier dashboard
const themeManager = {
  // Theme preferences
  preferences: {
    displayMode: 'light',
    accentColor: 'blue',
    fontSize: 100,
    animations: true
  },

  // Initialize theme from localStorage or defaults
  init() {
    // Load saved preferences if they exist
    const savedPreferences = localStorage.getItem('themePreferences');
    if (savedPreferences) {
      try {
        this.preferences = JSON.parse(savedPreferences);
      } catch (e) {
        console.error('Error parsing saved theme preferences:', e);
      }
    }

    // Apply the loaded/default theme
    this.applyTheme();
    
    // Set up listeners for theme settings changes
    this.setupListeners();
  },

  // Save preferences to localStorage
  savePreferences() {
    localStorage.setItem('themePreferences', JSON.stringify(this.preferences));
  },

  // Apply theme based on current preferences
  applyTheme() {
    // Apply display mode (light/dark)
    document.documentElement.classList.remove('theme-light', 'theme-dark', 'theme-system');
    document.documentElement.classList.add(`theme-${this.preferences.displayMode}`);
    
    if (this.preferences.displayMode === 'system') {
      // Check system preference
      if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.classList.add('dark-mode');
      } else {
        document.documentElement.classList.add('light-mode');
      }
      
      // Listen for system theme changes
      window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
        if (this.preferences.displayMode === 'system') {
          document.documentElement.classList.toggle('dark-mode', e.matches);
          document.documentElement.classList.toggle('light-mode', !e.matches);
        }
      });
    } else if (this.preferences.displayMode === 'dark') {
      document.documentElement.classList.add('dark-mode');
      document.documentElement.classList.remove('light-mode');
    } else {
      document.documentElement.classList.add('light-mode');
      document.documentElement.classList.remove('dark-mode');
    }

    // Apply accent color
    document.documentElement.dataset.accentColor = this.preferences.accentColor;
    
    // Apply font size
    document.documentElement.style.fontSize = `${this.preferences.fontSize}%`;
    
    // Apply animations setting
    if (!this.preferences.animations) {
      document.documentElement.classList.add('no-animations');
    } else {
      document.documentElement.classList.remove('no-animations');
    }
  },
  
  // Update a specific preference
  updatePreference(key, value) {
    if (key in this.preferences) {
      this.preferences[key] = value;
      this.savePreferences();
      this.applyTheme();
    }
  },
  
  // Set up event listeners for theme settings
  setupListeners() {
    // This will be called on each page load to set up relevant listeners
    document.addEventListener('DOMContentLoaded', () => {
      // Check if we're on the settings page
      if (document.getElementById('appearance')) {
        this.setupSettingsPageListeners();
      }
    });
  },
  
  // Set up listeners specifically for the settings page
  setupSettingsPageListeners() {
    // Display mode radios
    const displayModeInputs = document.querySelectorAll('input[name="displayMode"]');
    displayModeInputs.forEach(input => {
      // Set initial state based on preferences
      if (input.value === this.preferences.displayMode) {
        input.checked = true;
        document.querySelector(`.${input.value}-check`).style.transform = 'scale(1)';
      }
      
      // Add change listener
      input.addEventListener('change', () => {
        if (input.checked) {
          this.updatePreference('displayMode', input.value);
        }
      });
    });
    
    // Accent color radios
    const accentColorInputs = document.querySelectorAll('input[name="accentColor"]');
    accentColorInputs.forEach(input => {
      // Set initial state based on preferences
      if (input.value === this.preferences.accentColor) {
        input.checked = true;
        document.querySelector(`.${input.value}-check`).style.transform = 'scale(1)';
      }
      
      // Add change listener
      input.addEventListener('change', () => {
        if (input.checked) {
          this.updatePreference('accentColor', input.value);
        }
      });
    });
    
    // Font size slider
    const fontSizeSlider = document.getElementById('fontSize');
    if (fontSizeSlider) {
      // Set initial value
      fontSizeSlider.value = this.preferences.fontSize;
      document.getElementById('fontSizeValue').textContent = `${this.preferences.fontSize}%`;
      
      // Add input listener
      fontSizeSlider.addEventListener('input', () => {
        const newSize = parseInt(fontSizeSlider.value);
        document.getElementById('fontSizeValue').textContent = `${newSize}%`;
        this.updatePreference('fontSize', newSize);
      });
    }
    
    // Animations checkbox
    const animationsCheckbox = document.querySelector('input[name="animations"]');
    if (animationsCheckbox) {
      // Set initial state
      animationsCheckbox.checked = this.preferences.animations;
      
      // Add change listener
      animationsCheckbox.addEventListener('change', () => {
        this.updatePreference('animations', animationsCheckbox.checked);
      });
    }
  }
};

// Initialize theme on page load
document.addEventListener('DOMContentLoaded', () => {
  themeManager.init();
});

// Make the theme manager globally accessible
window.themeManager = themeManager;
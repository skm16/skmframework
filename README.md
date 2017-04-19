# skmframework

Theme Name: SKM Framework
Theme URI: https://seanroberts.me/skm-framework
Author: SKM Team
Author URI: https://seanroberts.me
Description: A stripped-down developer-friendly WordPress theme framework that harnesses the power of Bootstrap 3, grunt and sass
Version: 1.0
Text Domain: skmframework
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
Tags: left-sidebar, two-columns, custom-background, custom-header, custom-menu, custom-logo, editor-style, full-width-template


# DEPENDENCIES:
Node.js, SASS, GRUNT (grunt-sass, grunt-contrib-watch, grunt-contrib-copy, grunt-autoprefixer, grunt-contrib-concat, grunt-contrib-uglify)

# INSTALLATION / THEME CUSTOMIZATION:
- Download & install theme
  - Install Node.js, SASS, GRUNT if not already installed. For more info: https://nodejs.org/, https://gruntjs.com/installing-grunt, http://sass-lang.com/install
- Run "grunt" via command line within the theme's root directory
  - If all dependencies are correctly installed you should see something like this:
  ---------------------------------------------------------
      Running "sass:dist" (sass) task

      Running "concat:core" (concat) task
      Running "uglify:my_target" (uglify) task
      >> 1 file created 771 B → 392 B

      Running "copy:main" (copy) task


      Running "watch" task
      Waiting...
  ----------------------------------------------------------
 --ENJOY!

# IMPORTANT NOTES:
- SKM Framework is a framework not a theme and is geared towards theme developers
- SKM Framework includes an assortment of useful classes designed to accelerate template development
  - Fonts sizes - assets/scss/components/fonts/font_sizes.scss"
  - Line heights - "assets/scss/components/fonts/font_line_heights.scss"
  - Font families - "assets/scss/components/fonts/font_families.scss"
  - Font weights - "assets/scss/components/fonts/font_weights.scss"
  - Theme colors - "assets/scss/components/colors.scss"
  - Font tag styles (eg h1, h2, ect.) - "assets/scss/components/fonts.scss"
  - Font tag styles (eg h1, h2, ect.) - "assets/scss/components/fonts.scss"
  - Animations - "assets/scss/components/utilities/animations.scss"
  - Background styles - "assets/scss/components/utilities/backgrounds.scss"
  - Buttons - "assets/scss/components/utilities/buttons.scss"
  - Forms - "assets/scss/components/utilities/forms.scss"
  - Layout - "assets/scss/components/utilities/layout.scss"
  - Lists - "assets/scss/components/utilities/lists.scss"
  - Margins - "assets/scss/components/utilities/margins.scss"
  - Paddings - "assets/scss/components/utilities/paddings.scss"
  - Full-height panels - "assets/scss/components/utilities/panels.scss"
  - Positioning (relative, absolute, fixed) - "assets/scss/components/utilities/positionings.scss"
  - CSS3 transitions - "assets/scss/components/utilities/transitions.scss"
  - Vertical Alignment - "assets/scss/components/utilities/vertical_alignment.scss"
- SKM Framework uses Bootstrap 3 as the core front-end framework and includes font-awesome and all other bootstrap components


# MISC:
######  GOOGLE FONT SUPPORT - Defaults to Roboto
--------------
- To add custom Google Fonts update the following file with your Google Fonts URL
- "lib/google_fonts" (Line 7)  
- Update your global SASS font variables in the following file -
- "assets/scss/components/fonts/font_families.scss"

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


DEPENDENCIES:
Node.js, SASS, GRUNT (grunt-sass, grunt-contrib-watch, grunt-contrib-copy, grunt-autoprefixer, grunt-contrib-concat, grunt-contrib-uglify)

INSTALLATION / THEME CUSTOMIZATION:
1. Download & install theme
  1a. Install Node.js, SASS, GRUNT if not already installed. For more info: https://nodejs.org/, https://gruntjs.com/installing-grunt, http://sass-lang.com/install
2. Run "grunt" via command line within the theme's root directory
  2a. If all dependencies are correctly installed you should see something like this:
  ---------------------------------------------------------
      Running "sass:dist" (sass) task

      Running "concat:core" (concat) task
      Running "uglify:my_target" (uglify) task
      >> 1 file created 771 B → 392 B

      Running "copy:main" (copy) task


      Running "watch" task
      Waiting...
  ----------------------------------------------------------
  3. ENJOY!

IMPORTANT NOTES:
1. SKM Framework is a framework not a theme and is geared towards theme developers
2. SKM Framework includes a large assortment of useful classes designed to accelerate template development
  2a. Fonts sizes - assets/scss/components/fonts/font_sizes.scss"
  2b. Line heights - "assets/scss/components/fonts/font_line_heights.scss"
  2c. Font families - "assets/scss/components/fonts/font_families.scss"
  2d. Font weights - "assets/scss/components/fonts/font_weights.scss"
  2e. Theme colors - "assets/scss/components/colors.scss"
  2f. Font tag styles (eg h1, h2, ect.) - "assets/scss/components/fonts.scss"
  2g. Font tag styles (eg h1, h2, ect.) - "assets/scss/components/fonts.scss"
  2h. Animations - "assets/scss/components/utilities/animations.scss"
  2i. Background styles - "assets/scss/components/utilities/backgrounds.scss"
  2j. Buttons - "assets/scss/components/utilities/buttons.scss"
  2k. Forms - "assets/scss/components/utilities/forms.scss"
  2l. Layout - "assets/scss/components/utilities/layout.scss"
  2m. Lists - "assets/scss/components/utilities/lists.scss"
  2n. Margins - "assets/scss/components/utilities/margins.scss"
  2o. Paddings - "assets/scss/components/utilities/paddings.scss"
  2p. Full-height panels - "assets/scss/components/utilities/panels.scss"
  2q. Positioning (relative, absolute, fixed) - "assets/scss/components/utilities/positionings.scss"
  2r. CSS3 transitions - "assets/scss/components/utilities/transitions.scss"
  2s. Vertical Alignment - "assets/scss/components/utilities/vertical_alignment.scss"
3. SKM Framework uses Bootstrap 3 as the core front-end framework and includes font-awesome and all other bootstrap components


MISC:
// GOOGLE FONT SUPPORT - Defaults to Roboto
1. To add custom Google Fonts update the following file with your Google Fonts URL
  "lib/google_fonts" (Line 7)  
2. Update your global SASS font variables in the following file -
  "assets/scss/components/fonts/font_families.scss"

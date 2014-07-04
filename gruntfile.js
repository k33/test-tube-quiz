module.exports = function(grunt) { // Grunt wrapper - Do grunt-related things in here

  grunt.initConfig({ // Initialize our configuration object
    pkg: grunt.file.readJSON('package.json'), // Read project settings from package.json
    
    jshint: {
      files: ['custom.js'] // Just watch the src js file not the minified one
    },
    
    less: { // Configure the less task
      development: {
        options: {
          paths: "src/less",
        },
        files: {
          // target.css file: source.less file
          "style.css": "src/less/style.less"
        }
      }
    },
    
    watch: { 
    // Configure the watch task
    // You should adapt this to your specific needs on a per project basis
      
      scripts: {
        files: ['<%= jshint.files %>'],
        tasks: ['jshint'],
      },
      css: {
        files: ['src/**/*.less'],
        tasks: ['less'],
      },
      livereload: {
        // Here we watch the files the css task will compile to
        // These files are sent to the live reload server after css compiles to them
        options: { livereload: true },
        files: ['**/*'],
      },
    }
    
  });
  
    // Load the tasks
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
    // Register a test task for jshint. This can be run just by typing "grunt test" on the command line
    grunt.registerTask('test', ['jshint'])
    
    // And register the default task. This can be run just by typing "grunt" on the command line. This should be done before production.
    grunt.registerTask('default', ['less', 'jshint']);
    
};
module.exports = function (grunt) {
  //
  var $location = {

    version: {
      assets: ['dist/*.js', 'dist/js/*.js', 'dist/css/*.css']
    },

    src: {

        app: {
          js: ['resources/assets/js/app.js'],
          css: ['resources/assets/css/*.css'],
          img: ['resources/assets/img']
        },

        vendor: {
              js: [
                'node_modules/jquery/dist/jquery.js',
                'node_modules/bootstrap/dist/js/bootstrap.js',
                'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
                'node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js',
                'node_modules/inputmask/dist/jquery.inputmask.bundle.js'

              ],
              css: [
                'node_modules/font-awesome/css/font-awesome.css',
                'node_modules/bootstrap/dist/css/bootstrap.css',
                'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css',

              ]
        },

        fonts: [
          'node_modules/bootstrap/dist/fonts/*.{eot,svg,ttf,woff,woff2,otf}',
          'node_modules/font-awesome/fonts/*.{eot,svg,ttf,woff,woff2,otf}'
        ],

        sass: {
            app: 'resources/assets/sass/app.sass'
        }

    },

    dest: {

      app: {
        js: 'public/js/app.js',
        css: 'public/css/app.css',
      },

      vendor: {
        js: 'public/js/vendor.js',
        css: 'public/css/vendor.css',
      },

      fonts: 'public/fonts',
      img: 'public/img',

      sass: {
          app: 'resources/assets/css/app.css'
      }

    }

  };

  // Project configuration.
  grunt.initConfig({
    //
    pkg: grunt.file.readJSON('package.json'),
    //
    uglify: {
      options: {
        mangle: false
      },
      scripts: {
        files: [{
          src: $location.src.app.js,
          dest: $location.dest.app.js,
        }],
      },
    },
    //
    jshint: {
      options: {
        curly: false,
        eqeqeq: false,
        eqnull: false,
        browser: false,
        loopfunc: true,
        globals: {
          jQuery: true,
          "$app": true
        },
      },
      gruntfile: ['gruntfile.js'],
      src: $location.src.app.js
    },
    //
    //cacheBust: {
      //bust: {
        //options: {
          //assets: $location.version.assets,
          //queryString: true
        //},
        //src: $location.version.dest
      //}
    //},
    //
    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      css: {
        files: [{
          src: $location.src.app.css,
          dest: $location.dest.app.css,
        }]
      }
    },
    //
    copy: {
      main: {
        files: [
          // Assets Fonts files
          {
            expand: true,
            src: $location.src.fonts,
            dest: $location.dest.fonts,
            flatten: true
          }
          // Assets Image files
          //{
            //expand: true,
            //cwd: $location.img,
            //src: ['*.{ico,png,jpg}', '**/*.{ico,png,jpg}', '**/**/*.{ico,png,jpg}'],
            //dest: $location.out.img
          //},
        ],
      },
    },
    //
    concat: {
      dist: {
        options: {
          separator: '\n/* NEW FILE */\n',
          stripBanners: true,
        },
        files: [
          // Vendor JS
          {
            src: $location.src.vendor.js,
            dest: $location.dest.vendor.js
          },
          // Vendor CSS
          {
            src: $location.src.vendor.css,
            dest: $location.dest.vendor.css
          }
        ]
      },
      //
      dev: {
        options: {
          separator: '\n/* NEW FILE */\n\n',
          stripBanners: false,
          sourceMap: true
        },
        files: [
          // Vendor JS
          {
            src: $location.src.vendor.js,
            dest: $location.dest.vendor.js
          },
          // App JS
          {
            src: $location.src.app.js,
            dest: $location.dest.app.js
          },
          // Vendor CSS
          {
            src: $location.src.vendor.css,
            dest: $location.dest.vendor.css
          },
          // App CSS
          {
            src: $location.src.app.css,
            dest: $location.dest.app.css
          }
        ]
      }
    },
    //
    //
    clean: {
      dist: {
        src: ['public/js/*', 'public/css/*', 'public/fonts/*']
      },
      dev: {
        src: ['public/js/app.*', 'public/css/app.*', 'public/fonts/*']
      }
    },
    //
    //
    //
    //sass: {
        //dist: {
          //options: {
            //sourceMap: true
          //},
          //files: { 'resources/assets/sass/app.scss': 'resources/assets/css/app.css'}
        //}
    //},
    //
    //
    watch: {
      scripts: {
        files: [$location.src.app.js],
        tasks: ['uglify'],
        options: {
          spawn: false,
        }
      },
      css: {
        files: $location.src.app.css,
        tasks: ['cssmin'],
        options: {
          spawn: false,
        }
      },
      //
      dev: {
        files: [$location.src.app.js, $location.src.app.css],
        tasks: ['dev'],
        options: {
          spawn: false,
        }
      }
    }
    //
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-clean');
  //grunt.loadNpmTasks('grunt-sass');
  //grunt.loadNpmTasks('grunt-text-replace');
  //grunt.loadNpmTasks('grunt-file-creator');
  //grunt.loadNpmTasks('grunt-cache-bust');
  //grunt.loadNpmTasks('grunt-contrib-connect');

  // Default task(s).
  grunt.registerTask('default', ['clean:dist', 'copy', 'cssmin', 'uglify', 'concat:dist']);

  // Dev task(s).
  grunt.registerTask('dev', ['clean:dev', 'copy', 'jshint', 'concat:dev']);

  // Dev task(s).
  grunt.registerTask('lint', ['jshint']);

  // Server Live Reload.
//  grunt.registerTask('server', ['connect:server']);

};

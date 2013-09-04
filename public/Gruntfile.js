module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
      compassMultiple: {
        options : {
        },
        // multiple option provides you to compile multi sassDir.
        dev: {
          options: {
            environment: 'development',
            multiple: [
              {
                sassDir: 'slimbone_app/scss',
                cssDir: 'slimbone_app/css'
              },
              {
                sassDir: 'slimbone_admin/scss',
                cssDir: 'slimbone_admin/css'
              }
            ]
          }
        },
        dist: {
          options: {
            environment: 'production',
            multiple: [
              {
                sassDir: 'slimbone_app/scss',
                cssDir: 'slimbone_app/css'
              },
              {
                sassDir: 'slimbone_admin/scss',
                cssDir: 'slimbone_admin/css'
              }
            ]
          }
        }
      },
      watch: {
        dev: {
          files: ['**/*.scss'],
            tasks: ['compassMultiple:dev'],
            options: {
              spawn: false,
            },
        },
        dist: {
          files: ['**/*.scss'],
            tasks: ['compassMultiple:dist'],
            options: {
              spawn: false,
            },
        }
      }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-compass-multiple');

    grunt.registerTask('default', ['watch:dist']);
};

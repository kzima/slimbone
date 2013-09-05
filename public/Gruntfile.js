module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    compass: {             
      appDist: {                  
        options: {              
          sassDir: 'slimbone_app/scss',
          cssDir: 'slimbone_app/css',
          environment: 'production'
        }
      },
      appDev: {                    
        options: {
          sassDir: 'slimbone_app/scss',
          cssDir: 'slimbone_app/css',
        }
      },
      adminDist: {                  
        options: {              
          sassDir: 'slimbone_admin/scss',
          cssDir: 'slimbone_admin/css',
          environment: 'production'
        }
      }, 
      adminDev: {                    
        options: {
          sassDir: 'slimbone_admin/scss',
          cssDir: 'slimbone_admin/css',
        }
      }    
    },
    watch: {
      allDist: {
        files: [
          'slimbone_app/scss/**/*.{scss,sass}',
          'slimbone_admin/scss/**/*.{scss,sass}'
        ],
        tasks: ['compass:appDist', 'compass:adminDist']
      },
      allDev: {
        files: [
          'slimbone_app/scss/**/*.{scss,sass}',
          'slimbone_admin/scss/**/*.{scss,sass}'
        ],
        tasks: ['compass:appDev', 'compass:adminDev']
      },
      appDev: {
        files: [
          'slimbone_app/scss/**/*.{scss,sass}',
        ],
        tasks: ['compass:appDev']
      },
      adminDev: {
        files: [
          'slimbone_admin/scss/**/*.{scss,sass}'
        ],
        tasks: ['compass:adminDev']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  
  grunt.registerTask('default', ['watch:allDist']);
  grunt.registerTask('all-dev', ['watch:allDev']);
  grunt.registerTask('app-dev', ['watch:appDev']);
  grunt.registerTask('admin-dev', ['watch:adminDev']);

};

/** @type {import('tailwindcss').Config} */
const { colors: defaultColors } = require('tailwindcss/defaultTheme')

const colors = {
  ...defaultColors,
  ...{
    "gray": {
      '101': '#E0E3E7',
      '102': '#D9D9D9',
      '103': '#F6F8FA',
      '104': '#959DA5',
      '105': '#6A7S7D',
      '106': '#586069',
      'default': '#2F3639'
    },
    "red": {
      'error': 'E91818'
    },
    "blue": {
      '104': '499AF9'
    },
  },
}


export default {
  
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',

  ],
 
    theme: {
      extend: {
        spacing: {
          '88': '88%',
          '115': '29rem',
          '19': '4.875rem',
          '570' : '35rem',
          '368' : '23rem',
          '436' : '27.25rem',
          '124' : '7.75rem',
          '272' : '17rem',
          '22' : '1.375rem',
          '60' : '3.75',
          '336' : '21rem',
          '106' : '6.625rem',
          '27'  : '1.6875rem'
        },
      
      colors: {
        gray: {
          '101': '#E0E3E7',
          '102': '#D9D9D9',
          '103': '#F6F8FA',
          '104': '#959DA5',
          '105': '#6A737D',
          '106': '#586069',
          'default': '#2F3639'
        },
        red: {
          'error': '#E91818'
        },
        blue: {
          '104': '#499AF9'
        },
        green: {
          '101' : '#4ABF4E'
        }
      },
      fontFamily: {
        helvetica: ['helvetica']
      }
    }
    },
  
  plugins: [],
}


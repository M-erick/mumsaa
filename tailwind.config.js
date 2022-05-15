module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
      colors:{
          'lighred':'#F24B4B'

      },
    extend: {}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}

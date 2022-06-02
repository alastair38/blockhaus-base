const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    './*/*.php',
    './**/*.php',
    './js/*.js',
    './functions.php',
    '../../plugins/blockhaus-functionality/includes/blocks/layouts/*.php',
  ],
  theme: {
    fontFamily: {
      sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
      serif: ['Merriweather', ...defaultTheme.fontFamily.serif],
      mono: [...defaultTheme.fontFamily.mono],
    },
    extend: {
      colors: {
        primary: {
          default: 'var(--wp--preset--color--primary-default)',
          offset: 'var(--wp--preset--color--primary-offset)',
        },
        secondary: 'var(--wp--preset--color--secondary)',
        offset: 'var(--wp--preset--color--primary-offset)',
        accent: 'var(--wp--preset--color--accent)',
        highlight: 'var(--wp--preset--color--highlight)',
        neutral: {
          light: {
            100: 'var(--wp--preset--color--neutral-light-100)',
            500: 'var(--wp--preset--color--neutral-light-500)',
            900: 'var(--wp--preset--color--neutral-light-900)',
          },
          dark: {
            100: 'var(--wp--preset--color--neutral-dark-100)',
            500: 'var(--wp--preset--color--neutral-dark-500)',
            900: 'var(--wp--preset--color--neutral-dark-900)',
          },
        },
      },
      backgroundImage: {
        'grain-dots':
          "url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%230f0f0f' fill-opacity='.5' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E\")",
      },
      boxShadow: {
        retro: '2px 2px 0 0 currentColor',
      },
      gridTemplateColumns: {
        // Complex site-specific column configuration
        hero: '3fr 3rem 2fr',
      },
      typography: {
        DEFAULT: {
          css: {
            color: 'var(--wp--preset--color--secondary)',
            a: {
              color: 'var(--wp--preset--color--accent)',
              textDecorationThickness: '2px',
              fontWeight: '900',
              '&:hover': {
                color: 'var(--wp--preset--color--secondary)',
              },
            },
          },
        },
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
}

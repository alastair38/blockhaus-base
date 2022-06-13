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
        curves:
          "url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' id='visual' viewBox='0 0 900 600' width='900' height='600'%3E%3Cpath d='M584 600L596 550C608 500 632 400 588.5 300C545 200 434 100 378.5 50L323 0L900 0L900 50C900 100 900 200 900 300C900 400 900 500 900 550L900 600Z' fill='%23d0e6e1'%3E%3C/path%3E%3Cpath d='M251 600L303.5 550C356 500 461 400 455 300C449 200 332 100 273.5 50L215 0L324 0L379.5 50C435 100 546 200 589.5 300C633 400 609 500 597 550L585 600Z' fill='%23e2edea'%3E%3C/path%3E%3Cpath d='M0 600L0 550C0 500 0 400 0 300C0 200 0 100 0 50L0 0L216 0L274.5 50C333 100 450 200 456 300C462 400 357 500 304.5 550L252 600Z' fill='%23f4f4f4'%3E%3C/path%3E%3C/svg%3E\")",
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
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms')({
      strategy: 'base', // only generate global styles
    }),
  ],
}

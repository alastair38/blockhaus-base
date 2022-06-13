window.cookieconsent.initialise({
  palette: {
    popup: {
      background: '#4ADE80',
    },
    button: {
      background: '#000',
    },
  },
  position: 'bottom',
  type: 'opt-out',
  content: {
    href: 'https://thiswebsite.com',
  },
})
// window.addEventListener('load', function () {
//   var p
//   window.cookieconsent.initialise(
//     {
//       palette: {
//         popup: {
//           background: '#252e39',
//         },
//         button: {
//           background: '#aa3b34',
//         },
//       },
//       position: 'bottom',
//       type: 'opt-in',
//       content: {
//         message:
//           'This website uses cookies to ensure you get the best experience on our website.',
//         link: 'View our privacy policy',
//         dismiss: 'Do not allow!',
//         href: 'https://ukpandemicethics.org/privacy',
//       },
//       onRevokeChoice: function () {
//         console.log('<em>onRevokeChoice()</em> called')
//       },
//     },
//     function (popup) {
//       p = popup
//     },
//     function (err) {
//       console.error(err)
//     }
//   )
//   var revoke = document.getElementById('btn-revokeChoice')
//   if (revoke) {
//     revoke.onclick = function (e) {
//       console.log('Calling <em>revokeChoice()</em>')
//       p.revokeChoice()
//     }
//   }
// })

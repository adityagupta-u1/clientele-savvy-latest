import 'bootstrap'
import $, { event } from 'jquery'

let loc = location.href
let front_page = 'http://clientele-savvy.local/'

if (loc == front_page) {
  document.getElementById('btn').addEventListener('click', (event) => {
    var name = document.getElementById('name')
    var email = document.getElementById('email')
    var number = document.getElementById('number')
 
      if (loc == contact_us) {
        $.ajax({
          url: 'http://test123.local/contact-us/',
          method: 'POST',
          dataType: 'json',
          data: {
            name: name.val(),
            email: email.val(),
            number: number.val(),
          },
          success: function (response) {
            console.log(response)
          },
        })
    }
  })
}


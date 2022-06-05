import 'bootstrap'
import $, { event } from 'jquery'
import './nav'
import './animations'

let loc = location.href
let front_page = 'http://clientele-savvy.local/'

if (loc == front_page) {
  document.getElementById('btn').addEventListener('click', (event) => {
    var Fname = document.getElementById('first-name')
    var Lname = document.getElementById('last-name')
    var email = document.getElementById('email')
    var number = document.getElementById('number')
 
      if (loc == contact_us) {
        $.ajax({
          url: 'http://test123.local/contact-us/',
          method: 'POST',
          dataType: 'json',
          data: {
            Fname: Fname.val(),
            Lname: Lname.val(),
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




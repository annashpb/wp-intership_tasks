// $(document).ready(function() {
//     $('#loginform').submit(function(e) {
//         e.preventDefault();
//         $.ajax({
//             type: "GET",
//             url: 'access.php',
//             data: $(this).serialize(),
//             success: function(response)
//             {
//                 var jsonData = JSON.parse(response);
//  console.log(response);
//                 // user is logged in successfully in the back-end
//                 // let's redirect
//                 if (jsonData.success == "1")
//                 {
//                     location.href = 'my_profile.php';
//                 }
//                 else
//                 {
//                     alert('Invalid Credentials!');
//                 }
//            }
//        });
//      });
// });

const xhr = new XMLHttpRequest();
xhr.responseType = "json";
console.log(xhr);
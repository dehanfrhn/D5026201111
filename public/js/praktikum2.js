$('.body-form').submit(function (e) {
  e.preventDefault();
  let fullname = $('#floatingFullname').val();
  let username = $('#floatingUsername').val();
  let email = $('#floatingEmail').val();
  let state = $('.select').val();
  let address = $('#floatingAddress').val();
  let zipCode = $('#floatingZipcode').val();

  let check = false;

  for (let i = 0; i < fullname.length; i++) {
    if (Number(fullname[i])) {
      check = true;
    }
  }

  if (username.length < 6 || username.length > 8) {
    check = true;
  }

  if (zipCode.length !== 6 || !Number(zipCode)) {
    check = true;
  }

  if (check) {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Something went wrong!',
      footer: '<a href="">Why do I have this issue?</a>'
    })
  }
});
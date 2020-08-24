// Warn before remove data and redirect
function warnBeforeAction(URL, redirectURL) {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    reverseButtons: true
  }).then((result) => {
    if (result.value) {
      var _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            method :"DELETE",
            url:URL,
            dataType:"json",
            data:{_token:_token},
            success:function(data)
            {
              swalWithBootstrapButtons.fire(
             'Deleted!',
             'Your file has been deleted.',
             'success'
             ).then((result) =>{
               window.location.href = redirectURL;
             })
            }
      })
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
      )
    }
  })
}

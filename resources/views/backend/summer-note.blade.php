<script>
    $(document).ready(function() {
$('#summernote').summernote({
placeholder: 'Description',
  tabsize: 2,
  height: 250,
  // toolbar: [
  //   ['style', ['style']],
  //   ['font', ['bold', 'underline', 'clear']],
  //   ['color', ['color','background']],
  //   ['para', ['ul', 'ol', 'paragraph']],
  //   ['table', ['table']],
  //   ['insert', ['link', 'picture',]],
  //   ['view', [, 'codeview', 'help']]
  // ],
callbacks: {
    onImageUpload: function(files) {
  sendFile(files[0]);
}
}
});

function sendFile(file) {
data = new FormData();
data.append("file", file);
$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    }),
$.ajax({
  data: data,
  type: "POST",
  url: '{{route("CkfileUpload")}}',
  cache: false,
  contentType: false,
  processData: false,
  success: function (url) {
    var image = $('<img>').attr('src', url);
        $('#summernote').summernote("insertNode", image[0]);
  }
});
}
});

</script>
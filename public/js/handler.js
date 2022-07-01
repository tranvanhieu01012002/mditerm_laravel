var image = document.querySelector('[name="image"]');

image.addEventListener('change',(event)=>{
    var uploaded_img = URL.createObjectURL(event.target.files[0]);
    document.querySelector('#image-show').setAttribute('src',uploaded_img);
});


function deletethis(id){
    document.getElementById(id).remove();
}

function handleFileSelectI(){
    handleFileSelect("resultI");
}

function handleFileSelectE(){
    handleFileSelect("resultE");
}


function handleFileSelect(input) {
    //Check File API support
    if (window.File && window.FileList && window.FileReader) {
        var x = document.getElementById('imgnum').value;
        var y = Number(x);
        var files = event.target.files; //FileList object
        var output = document.getElementById(input);

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            //Only pics
            if (!file.type.match('image')) continue;

            var picReader = new FileReader();
            picReader.addEventListener("load", function (event) {
                var picFile = event.target;
                var div = document.createElement("label");
                div.id = "label_"+x;
                div.innerHTML = "<img class='thumbnail' onclick=\"deletethis(\'"+div.id+"\')\" src='" + picFile.result + "'" + "width='200px' height='200px'/> <input type='hidden' name='gambar[]' value='"+picFile.result+"'/>";
                output.insertBefore(div, null);
            });
            //Read the image
            picReader.readAsDataURL(file);
        }
        document.getElementById('imgnum').value = y+1;
    } else {
        console.log("Your browser does not support File API");
    }
}
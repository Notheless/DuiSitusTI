var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview');
        output.src = reader.result;
        var Val = document.getElementById('imgval');
        Val.value = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };

  function deletethis(id){
    document.getElementById(id).remove();
}

function newA(inp){
    var output = document.getElementById('LastA');
    var x = document.getElementById('Anum').value;
    var y = Number(x);

    if(inp==y){
        document.getElementById('Anum').value = y+1;
        x = document.getElementById('Anum').value;
        var output = document.getElementById("LastA");
        
        var div = document.createElement("label");
        div.innerHTML = "<input class=\"data-input\" type=\"text\" name=\"Pengajaran[]\" onkeypress=\"newA("+x+")\"  id=\"Pengajaran"+x+"\";>";
        output.insertBefore(div, null);
    }
    if(false){
    }
}

function newB(inp){
    var output = document.getElementById('LastB');
    var x = document.getElementById('Bnum').value;
    var y = Number(x);

    if(inp==y){
        document.getElementById('Bnum').value = y+1;
        x = document.getElementById('Bnum').value;
        var output = document.getElementById("LastB");
        
        var div = document.createElement("label");
        div.innerHTML = "<input class=\"data-input\" type=\"text\" name=\"Penelitian[]\" onkeypress=\"newB("+x+")\"  id=\"Penelitian"+x+"\";>";
        output.insertBefore(div, null);
    }
    if(false){
    }
}

function newC(inp){
    var output = document.getElementById('LastC');
    var x = document.getElementById('Cnum').value;
    var y = Number(x);

    if(inp==y){
        document.getElementById('Cnum').value = y+1;
        x = document.getElementById('Cnum').value;
        var output = document.getElementById("LastC");
        
        var div = document.createElement("label");
        div.innerHTML = "<input class=\"data-input\" type=\"text\" name=\"Penunjang[]\" onkeypress=\"newC("+x+")\"  id=\"Penunjang"+x+"\";>";
        output.insertBefore(div, null);
    }
    if(false){
    }
}

function newD(inp){
    var output = document.getElementById('LastD');
    var x = document.getElementById('Dnum').value;
    var y = Number(x);

    if(inp==y){
        document.getElementById('Dnum').value = y+1;
        x = document.getElementById('Dnum').value;
        var output = document.getElementById("LastD");
        
        var div = document.createElement("label");
        div.innerHTML = "<input class=\"data-input\" type=\"text\" name=\"Pengabdian[]\" onkeypress=\"newD("+x+")\"  id=\"Pengabdian"+x+"\";>";
        output.insertBefore(div, null);
    }
    if(false){
    }
}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style type="text/css">
  .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
}

/*.dropdown button:hover {background-color: #ddd;}*/

.show {display: block;}

</style>


<table width="100%" style="background-color: #0066ff;color: white;">
 <tr width="75%">
  <td>
   <h2><?php echo "Welcome ".$_GET['user'] ?></h2>
  </td>
  <td width="15%">
    <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn" id="noti_number"><i class="fa fa-bell" aria-hidden="true" id="id"></i></button>
      <div id="myDropdown" class="dropdown-content">
            
      </div>
    </div>
  </td>
 </tr>
</table>

<script type="text/javascript">
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
  function loadDoc() {
    setInterval(function(){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

          document.getElementById("myDropdown").innerHTML = this.responseText;
        }
      };
    xhttp.open("GET", "data.php", true);
    xhttp.send();
    },1000);
  }
  loadDoc();
</script>
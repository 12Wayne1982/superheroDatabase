console.log("Hello, does JSS work? Yes it does!!!");

// searchForHeroResult.php --> hindert submit eines leeren Formulares.
  var toggleSubmit = function(){
    var isDisabled = ![].some.call(document.querySelectorAll(".searchFields"), 
                                    function(input){
                                      return input.value.length;
                                    }
                                  );
                                      
    var submitBtn = document.querySelector("#submitSearch");
    
    if(isDisabled){
      submitBtn.setAttribute("disabled", "disabled");
    } else{
      submitBtn.removeAttribute("disabled");
    }
  };

  document.querySelector("#searchForm").addEventListener("input", toggleSubmit, false);


function filterName(inputID, tdNumber)
{
    var input, inputValue, table, tr, td, i, tdValue;

    input = document.getElementById(inputID);
    
    inputValue = input.value.toUpperCase(); 
    table = document.getElementById("displayAllHeroesTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++){
     
      td = tr[i].getElementsByTagName("td")[tdNumber]; 
        console.log(td);
      if (td){
        tdValue = td.textContent || td.innerText; 
          console.log(tdValue);

        let indechs = tdValue.toUpperCase().indexOf(inputValue);
        console.log(indechs);
        
        if (tdValue.toUpperCase().indexOf(inputValue) > -1)
        {
            tr[i].style.display = "";
        } 
        else 
        {
          tr[i].style.display = "none";
        }
      }       
    }
  }
function Calendar(cal)  {
  this.cal = cal;
}

Calendar.prototype = {
  render: function(date)  {
    var container = document.getElementById(this.cal);
    var title = document.createElement("h1");
    var prev = document.createElement("span");
    var next = document.createElement("span");
    prev.innerHTML = "&#9664;";
    prev.className = "clickable";
    prev.addEventListener("click",switchPrev,false);
    next.innerHTML = "&#9654;";
    next.className = "clickable";
    next.addEventListener("click",switchNext,false);
    title.appendChild(prev);
    title.appendChild(document.createTextNode(date.toLocaleDateString()));
    title.appendChild(next);
    container.appendChild(title);
    var table = document.createElement("table");
    var weekHeaderRow = document.createElement("tr");
    var weekdays = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];

    



    for(var i=0; i<7; i++)  {
      var dayHeader = document.createElement("th");
      dayHeader.textContent = weekdays[i];
      weekHeaderRow.appendChild(dayHeader);
    }
    weekHeaderRow.className = "weekHeader";
    table.appendChild(weekHeaderRow);
    paintCalendar(date, table);
    container.appendChild(table);

    function paintCalendar(date, table)  {
      // save current date info
      var day = date.getDate();
      var month = date.getMonth();
      var year = date.getFullYear();
      // last day in previous month
      var lastDayInPrevMonth = new Date(year, month, 0).getDate();
      var lastDayInCurrMonth = (month==12) ? 31 : new Date(year, month+1, 0).getDate();
      // set date to be first day in current month
      date.setDate(1);
      var firstDayInWeekday = date.getDay();
      var calDate = new Date();
      var isLastRow = false;
      // record current date to be painted
      var currDate;
      // painting days in current month
      var isPaintingCurrMonth = false;
      // at most 6 rows are needed
      for(var i=0; i<6; i++)  {
        // if last row for current month is done, go out of loop
        if(isLastRow)  break;
        var row = document.createElement("tr");
        for(var j=0; j<7; j++)  {
          // first row
          if(i===0)  {
            // days from previous month
            if(j<firstDayInWeekday)  {
              currDate = lastDayInPrevMonth - (firstDayInWeekday - j - 1);
            }
            // days in current month
            else  {
              currDate = j - firstDayInWeekday + 1;
              isPaintingCurrMonth = true;
            }
          }
          // other rows. increment currDate and compare with last day in curr month
          else  {
            currDate++;
            // set last row flag so no more rows are painted
            if(currDate === lastDayInCurrMonth)  {
              isLastRow = true;
            }
            // after curr month is done. reset currDate to 1 and set relavant flag
            if(currDate > lastDayInCurrMonth)  {
              currDate = 1;
              isPaintingCurrMonth = false;
            }
          }
          var col = document.createElement("td");
          //click date to mark
          // col.addEventListener("click",markDate,false);
          // function markDate(){

          // }


          // set ccs class to dim the days not in curr month
          if(!isPaintingCurrMonth)  {
            col.className = "inactive";
          }
          // highlight current day
          else if(calDate.getFullYear() === year && calDate.getMonth() === month && calDate.getDate() === currDate)  {
            col.className = "currDay";
          }
          col.textContent = String(currDate);
          row.appendChild(col);
        }
        table.appendChild(row);
      }
    }
    
           
         

    function switchPrev()  {
      removeTable();
      date.setMonth(date.getMonth()-1);
      title.firstChild.nextSibling.textContent = date.toLocaleDateString();
      paintCalendar(date,table);
    }

    function switchNext()  {
      removeTable();
      date.setMonth(date.getMonth()+1);
      title.firstChild.nextSibling.textContent = date.toLocaleDateString();
      paintCalendar(date,table);
    }

    function removeTable()  {
      while(table.firstChild !== table.lastChild)  {
        table.removeChild(table.lastChild);
      }
    }
  }
};

onload = function()  {
  
  var calendar2 = new Calendar("div1");
  calendar2.render(new Date());
};


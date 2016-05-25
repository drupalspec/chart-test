window.onload = function(){
    var ctx = document.getElementById("chart-area").getContext("2d");
    window.mySpie = new Chart(ctx).Spie(spieData, {
        responsive:false,
        segmentStrokeColor : "#000",
        segmentStrokeWidth : 2,
        animationEasing : "easeOutBounce",
        animationSteps : 100,
        animateRotate : true,
        showTooltips: false,

        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%><ul><% for (var j=0; j<segments[i].slices.length; j++){%><li><span style=\"background-color:<%=segments[i].slices[j].fillColor%>\"></span><%if(segments[i].slices[j].label){%><%=segments[i].slices[j].segmentLabel%><%}%></li><%}%></ul><%}%></li></ul>",
        tooltipTemplate: "<%if (label){%><%=label%><%}%><%if (segmentLabel && label){%> - <%}%><%if (segmentLabel){%><%=segmentLabel%><%}%>"
    });

    //var legendHolder = document.getElementById('my-doughnut-legend')
    //legendHolder.innerHTML = mySpie.generateLegend();
};
<script>

           // normalize the surgeons by percent
           // surgery.forEach(function(d,i){
           //  countrySum = d3.sum(d.surgery)
           //  d.surgery = d.surgery.map(function(x) { return 100*x / countrySum; });
           // })


            var tip1 = d3.tip()
				      .attr('class', 'd3-tip2')
				      .html(function(d,i) { 
      					return "<span style='color: grey; font-family: helvetica; font-size: 12px; line-height: 20px'>" + positions[i]['label']+ "</span>" + "<br><span style='color: #F04FA5; font-family: helvetica; font-size: 14px'>"+d+"</span>";
      				})
      				.direction('e')
      				.offset([0, 5]);

            var tip2 = d3.tip()
              .attr('class', 'd3-tip2')
              .html(function(d,i) { 
                return "<span style='color: grey; font-family: helvetica; font-size: 12px; line-height: 20px'>" + positionsnon[i]['label']+ "</span>" + "<br><span style='color: #44DBB8; font-family: helvetica; font-size: 14px'>"+d+"</span>";
              })
              .direction('e')
              .offset([0, 5]);

            var svg = d3.select(".bodychart").selectAll("div")
              .data(surgery)
              .enter().append("div")
              .attr("class", function(d){
                return "thing "+d.country;
                })
             	.append("svg")
             	.attr("height","400px")
             	.attr("width","200px")
             	.attr('class', "cirlcecolor")
             	.call(tip1)
              .call(tip2);

            var g = svg.selectAll('g')
                    .append('g');


//nonsurgical bubble
            
            var colornonsur = d3.scale.threshold()
                .domain([30000, 90000, 150000, 210000])
                .range(["rgba(68,219,184, 0.65)","rgba(68,219,184, 0.70)", "rgba(68,219,184, 0.75)", "rgba(68,219,184, 0.80)", "rgba(68,219,184, 0.85)"]);   

            var circlesnonsur = g
                .data(function(d){return d.nonsur; })
                .enter()
                .append("circle")
                .attr('id', 'circle2')
                .attr("cx", function (d, i) { return positionsnon[i].x+10; })
                .attr("cy", function (d, i) { return positionsnon[i].y-10; })
                .attr("r", function (d) { return  0.03*Math.sqrt(d); })
                .style('fill', function(d){
                  
             return colornonsur(d);
                })
                .style('stroke', 'white')
                .style('stroke-opacity', '0.7')

                .on('mouseover', tip2.show)
                .on('mouseout', tip2.hide);

//surgical bubble
            
            var colorsur = d3.scale.threshold()
              	.domain([70000, 90000, 150000, 210000])
              	.range(["rgba(240,79,165, 0.75)","rgba(240,79,165, 0.80)", "rgba(240,79,165, 0.85)", "rgba(240,79,165, 0.90)", "rgba(240,79,165, 0.95)"]);   

        //     var gradient = svg.append("defs")
				    // .append("radialGradient")
				    // .attr("id", "gradient");

           	var circlesur = g
                .data(function(d){return d.sur; })
              	.enter()
               	.append("circle")
                .attr('id', 'circle1')
               	.attr("cx", function (d, i) { return positions[i].x+10; })
              	.attr("cy", function (d, i) { return positions[i].y; })
              	.attr("r", function (d) { return 0.03*Math.sqrt(d); })
              	.style('fill', function(d){
				          return colorsur(d);
              	})
                .style('stroke', 'white')
                .style('stroke-opacity', '0.7')
              	.on('mouseover', tip1.show)
      			   .on('mouseout', tip1.hide);



		
// barchart
			

			d3.tsv("data.tsv", type, function(error, data) {
			  
        var width = 420,
          barHeight = 20;

        var x = d3.scale.linear()

        var xAxis = d3.svg.axis()
            .scale(x)
            .orient("top")
            .ticks(2)
            .tickValues([200,400])
            .tickSize(barHeight*25);

        var svg2 = d3.select(".chart")
            .attr("width", width).append('svg');

        var tip3 = d3.tip()
              
              .html(function(d,i) { 
                return "<span style='font-family: helvetica; font-size: 12px; line-height: 20px'>" + d['value']+"</span>";
              })
              .direction('e');


        x.domain([0, d3.max(data, function(d) { return d.value; })])
          .range([0, d3.max(data, function(d) { return d.value; })]);

			  svg2.attr("height", barHeight * data.length).call(tip3);


			  var bar = svg2.selectAll("g")
			      .data(data)
			      .enter().append("g")
			      .attr("transform", function(d, i) { return "translate(100," + i * barHeight + ")"; });

			  bar.append("rect")
			      .attr("width", function(d) { return x(d.value); })
			      .attr("height", barHeight - 1)
            .attr('class','bar')

            .on('mouseover', function(d){
              tip3
              .attr('class', function(){
                if (d.value <= 60) {
                  return 'd3-tip3-1';
                }

                if (d.value > 60) {
                  return 'd3-tip3-2';
                }
              })
              .offset(function(d){
                if (d.value <= 60) {
                  return [0,-5];
                }

                if (d.value > 60) {
                  return [0,-45];
                }
              })
              .show(d)
            })
            .on('mouseout', function(d){
              tip3.hide(d)
            });

			  // bar.append("text")
			  //     .attr("x", function(d) { 
			  //    	if (d.value <= 60) {return x(d.value) + 28; }
			  //     	else {return x(d.value) - 3; } })
			  //     .attr("y", barHeight / 2)
			  //     .attr("dy", ".35em")
			  //     .text(function(d) { return d.value; })
			  //     .style('fill',function(d) {
			  //     	if (d.value <= 60) {return 'gray'}
			  //     		else {return 'white'};
			  //     });


			 bar.append("text")
			      .attr("x", -10)
			      .attr("y", barHeight / 2)
			      .attr("dy", ".35em")
			      .text(function(d) { return d.name; })
			      .style('fill','gray');



        svg2.append('g')
          .attr("class", "axis")
            .attr("transform", "translate(100," + barHeight*25 + ")")
            .call(xAxis)
            .selectAll('text')
            .attr('y', -barHeight*25+14)
            .attr('x',5)
            .style('text-anchor', 'start');
			});




			function type(d) {
			  d.value = +d.value; // coerce to number
			  return d;
			}


        </script>
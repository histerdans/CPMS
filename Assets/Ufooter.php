        
<!--basic scripts-->

<!--[if !IE]>-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<!--<![endif]-->

        <!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='../Assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../Assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='../Assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="../Assets/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

        <!--[if lte IE 8]>
          <script src="../Assets/js/excanvas.min.js"></script>
          <![endif]-->

          
          <script src="../Assets/js/jquery.easy-pie-chart.min.js"></script>
          <script src="../Assets/js/flot/jquery.flot.min.js"></script>
          <script src="../Assets/js/flot/jquery.flot.pie.min.js"></script>
          <script src="../Assets/js/flot/jquery.flot.resize.min.js"></script>

          <!--ace scripts-->
          <?php       include_once('../Connections/localhost.php'); 
         
          ?>


          <!--inline scripts related to this page-->

          <script type="text/javascript">
            $(function(){
                $('.easy-pie-chart.percentage').each(function(){
                    var $box = $(this).closest('.infobox');
                    var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                    var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                    var size = parseInt($(this).data('size')) || 50;
                    $(this).easyPieChart({
                        barColor: barColor,
                        trackColor: trackColor,
                        scaleColor: false,
                        lineCap: 'butt',
                        lineWidth: parseInt(size/10),
                        animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                        size: size
                    });
                })
                
                $('.sparkline').each(function(){
                    var $box = $(this).closest('.infobox');
                    var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                    $(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
                });
                
                
                
               
                var placeholder = $('#piechart-placeholder1').css({'width':'90%' , 'min-height':'150px'});
                var data = [


                { label: "Finance & Economic Planning",  data: 12, color: "#ebd0d0"},
                { label: "Agriculture, Livestock & Fisheries",  data:12, color: "#660875"},
                { label: "Health Services",  data: 15, color: "#ebd0d0"},
                { label: "Education, Youth affairs, Culture & Social Services",  data: 8, color: "#383232"},
                { label: "Land, Housing & Physical Planning",  data: 11, color: "#5c2626"},
                { label: "Public Works, Roads & Transport",  data: 9, color: "#ebd0d0"},
                { label: "Water, Energy, Forestry, Environment and Natural Resources",  data: 5, color: "#4f5dd9"},
                { label: "Public Service Management",  data: 6, color: "#35b820"},
                { label: "Trade, Industrialization, Co-operate  Management & Wildlife",  data: 10, color: "#ba2323"},
                { label: "Information, Communication & E-Government",  data: 12, color: "#a6970e"}

                ]
                

                   


                function drawPieChart(placeholder, data, position) {
                  $.plot(placeholder, data, {
                    series: {
                        pie: {
                            show: true,
                            tilt:0.8,
                            highlight: {
                                opacity: 0.25
                            },
                            stroke: {
                                color: '#fff',
                                width: 2
                            },
                            startAngle: 2
                        }
                    },
                    legend: {
                        show: true,
                        position: position || "ne", 
                        labelBoxBorderColor: null,
                        margin:[-30,15]
                    }
                    ,
                    grid: {
                        hoverable: true,
                        clickable: true
                    }
                })
              }
              drawPieChart(placeholder, data);
              
             /**
             we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
             so that's not needed actually.
             */
             placeholder.data('chart', data);
             placeholder.data('draw', drawPieChart);
             
             
             
             var $tooltip = $("<div class='tooltip top in hide'><div class='tooltip-inner'></div></div>").appendTo('body');
             var previousPoint = null;
             
             placeholder.on('plothover', function (event, pos, item) {
                if(item) {
                    if (previousPoint != item.seriesIndex) {
                        previousPoint = item.seriesIndex;
                        var tip = item.series['label'] + " : " + item.series['percent']+'%';
                        $tooltip.show().children(0).text(tip);
                    }
                    $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
                } else {
                    $tooltip.hide();
                    previousPoint = null;
                }
                
            });
             
             
             
             
             
             
             var d1 = [];
             for (var i = 0; i < Math.PI * 2; i += 0.5) {
                d1.push([i, Math.sin(i)]);
            }
            
            var d2 = [];
            for (var i = 0; i < Math.PI * 2; i += 0.5) {
                d2.push([i, Math.cos(i)]);
            }
            
            var d3 = [];
            for (var i = 0; i < Math.PI * 2; i += 0.2) {
                d3.push([i, Math.tan(i)]);
            }
            
            
            
        })
    </script>
     <script type="text/javascript">
            $(function(){
                $('.easy-pie-chart.percentage').each(function(){
                    var $box = $(this).closest('.infobox');
                    var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                    var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                    var size = parseInt($(this).data('size')) || 50;
                    $(this).easyPieChart({
                        barColor: barColor,
                        trackColor: trackColor,
                        scaleColor: false,
                        lineCap: 'butt',
                        lineWidth: parseInt(size/10),
                        animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                        size: size
                    });
                })
                
                $('.sparkline').each(function(){
                    var $box = $(this).closest('.infobox');
                    var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                    $(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
                });
                
                
                
               
                var placeholder = $('#piechart-placeholder2').css({'width':'90%' , 'min-height':'150px'});
                var data = [


                { label: "Finance & Economic Planning",  data: 12, color: "#ebd0d0"},
                { label: "Agriculture, Livestock & Fisheries",  data:12, color: "#660875"},
                { label: "Health Services",  data: 15, color: "#ebd0d0"},
                { label: "Education, Youth affairs, Culture & Social Services",  data: 8, color: "#383232"},
                { label: "Land, Housing & Physical Planning",  data: 11, color: "#5c2626"},
                { label: "Public Works, Roads & Transport",  data: 9, color: "#ebd0d0"},
                { label: "Water, Energy, Forestry, Environment and Natural Resources",  data: 5, color: "#4f5dd9"},
                { label: "Public Service Management",  data: 6, color: "#35b820"},
                { label: "Trade, Industrialization, Co-operate  Management & Wildlife",  data: 10, color: "#ba2323"},
                { label: "Information, Communication & E-Government",  data: 12, color: "#a6970e"}

                ]
                

                   


                function drawPieChart(placeholder, data, position) {
                  $.plot(placeholder, data, {
                    series: {
                        pie: {
                            show: true,
                            tilt:0.8,
                            highlight: {
                                opacity: 0.25
                            },
                            stroke: {
                                color: '#fff',
                                width: 2
                            },
                            startAngle: 2
                        }
                    },
                    legend: {
                        show: true,
                        position: position || "ne", 
                        labelBoxBorderColor: null,
                        margin:[-30,15]
                    }
                    ,
                    grid: {
                        hoverable: true,
                        clickable: true
                    }
                })
              }
              drawPieChart(placeholder, data);
              
             /**
             we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
             so that's not needed actually.
             */
             placeholder.data('chart', data);
             placeholder.data('draw', drawPieChart);
             
             
             
             var $tooltip = $("<div class='tooltip top in hide'><div class='tooltip-inner'></div></div>").appendTo('body');
             var previousPoint = null;
             
             placeholder.on('plothover', function (event, pos, item) {
                if(item) {
                    if (previousPoint != item.seriesIndex) {
                        previousPoint = item.seriesIndex;
                        var tip = item.series['label'] + " : " + item.series['percent']+'%';
                        $tooltip.show().children(0).text(tip);
                    }
                    $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
                } else {
                    $tooltip.hide();
                    previousPoint = null;
                }
                
            });
             
             
             
             
             
             
             var d1 = [];
             for (var i = 0; i < Math.PI * 2; i += 0.5) {
                d1.push([i, Math.sin(i)]);
            }
            
            var d2 = [];
            for (var i = 0; i < Math.PI * 2; i += 0.5) {
                d2.push([i, Math.cos(i)]);
            }
            
            var d3 = [];
            for (var i = 0; i < Math.PI * 2; i += 0.2) {
                d3.push([i, Math.tan(i)]);
            }
            
            
            
        })
    </script>
</body>
</html>

/*
 * Dandelion Admin v1.2 - Dashboard Demo JS
 *
 * This file is part of Dandelion Admin, an Admin template build for sale at ThemeForest.
 * For questions, suggestions or support request, please mail me at maimairel@yahoo.com
 *
 * Development Started:
 * March 25, 2012
 * Last Update:
 * July 25, 2012
 *
 */

(function($) {
	$(document).ready(function(e) {
		$(".da-circular-stat").daCircularStat();
		
		var v_validate = $("#da-ex-wizard-form").validate({ onsubmit: false });
		$("#da-ex-wizard-form").daWizard({
			forwardOnly: false, 
			ajaxSubmit: true, 
			ajaxOptions: {
				success: function(response, status, xhr, form) {
					response = $.parseJSON(response);
					
					var msg = 'Form Successfully Submitted!\n\n';
					msg += 'Proof of Server Reponse: '+ response.ip_address + ' (your IP)\n\nData: \n';
					
					for(var i in response.data)
					{
						msg += '   ' + (i + ': ' + response.data[i]) + "\n";
					}
					
					alert(msg);
					if(confirm('Do you want to reset the form?'))
						$(form).data('daWizard').resetWizard();
				}
			}, 
			onLeaveStep: function(index, elem) {
				return v_validate.form();
			}, 
			onBeforeSubmit: function() {
				return v_validate.form();
			}, 
		});
		
		$("#da-ex-calendar-gcal").fullCalendar({
			events: 'http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic',
				
			eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=700,height=600');
				return false;
			}
		});
		
		if($.plot) {
			var 
				s = [100, 35, 35, 30, 105, 40, 35, 30, 40, 20, 15], 
				p = [12, 6, 0, 9, 15, 3, 18, 3, 6, 7, 9], 
				v = [54, 105, 35, 45, 75, 6, 20, 15, 30, 35, 45], 
				sales = [], 
				supportRequests = [], 
				pageViews = [], 
				previousPoint = null;
			for(var i = 0; i < s.length; i++) {
				sales.push([new Date(2012, 5, i + 1), s[i]]);
				supportRequests.push([new Date(2012, 5, i + 1), p[i]]);
				pageViews.push([new Date(2012, 5, i + 1), v[i]]);
			}
			
			function showTooltip(x, y, contents) {
				$('<div id="tooltip">' + contents + '</div>').css( {
					position: 'absolute',
					display: 'none',
					top: y + 5,
					left: x + 5,
					padding: '4px',
					color: "#ffffff", 
					'background-color': '#000',
					opacity: 0.75, 
					'border-radius': '3px'
				}).appendTo("body").fadeIn(200);
			}
			
			var opts = {
				series: {
					lines: { show: true }, 
					points: { show: true }
				},
				xaxis: {
					mode: "time", 
					min: (new Date(2012, 5, 1)).getTime(),
					max: (new Date(2012, 5, 11)).getTime()
				}, 
				grid: { 
					hoverable: true, 
					clickable: true, 
					borderWidth: null
				}
			};
			
			var plot = $.plot($("#da-ex-flot"), 
				[
				 { data: sales, label: "Sales", color: "#E15656"}, 
				 { data: supportRequests, label: "Support Requests", color: "#A6D037"}, 
				 { data: pageViews, label: "Page Views", color: "#61A5E4"}, 
				], 
				opts
			);
			$("#da-ex-flot").bind("plothover", function (event, pos, item) {
				if (item) {
					if (previousPoint != item.dataIndex) {
						previousPoint = item.dataIndex;
						
						$("#tooltip").remove();
						var x = item.datapoint[0], 
							y = Math.round(item.datapoint[1]);
						
						var dt = new Date(x);
						showTooltip(item.pageX, item.pageY, y + " " + item.series.label.toLowerCase() + " on " + dt.toLocaleDateString());
					}
				}
				else {
					$("#tooltip").remove();
					previousPoint = null;            
				}
			});
		}
	});
}) (jQuery);
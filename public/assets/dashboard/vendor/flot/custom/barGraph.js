'use strict'

var flotBarData = [
	[0,19.57749563156254],
	[1,21.990117798360984],
	[2,16.33951429212372],
	[3,20.81299261981016],
	[4,18.43049180497279],
	[5,20.50742948537699],
	[6,22.15321230561721],
	[7,13.734038382708317],
	[8,39.48248771261796],
	[9,31.406002456692214],
	[10,26.59886277727973],
	[11,12.156859927914581],
	[12,9.229765251904174],
	[13,5.183401848384374],
	[14,9.605706708466142],
	[15,10.832074796645134],
	[16,13.268792742800557],
	[17,18.216203428328363],
	[18,13.963666987062208],
	[19,18.712081450016612],
	[20,13.72401606510321],
	[21,11.305095416130975],
	[22,13.773906992422056],
	[23,15.834031310396583],
	[24,12.926545228583812],
	[25,17.595569228566347],
	[26,21.90850212276817],
	[27,18.29990271583387],
	[28,14.340994854410802],
	[29,18.22389641710976],
	[30,14.883609800856053],
	[31,13.019139849150623],
	[32,14.553083951054631],
	[33,15.417025583778472],
	[34,16.640872368623782],
	[35,19.456813236353057],
	[36,14.595960349995135],
	[37,17.729784515799526],
	[38,13.86824197051369],
	[39,9.492952801660538],
	[40,11.912479814449945],
	[41,9.798782954230068],
	[42,6.117552232900492],
	[43,1.4130313413037507],
	[44,2.3640186232524685],
	[45,2.3620174492590778],
	[46,4.523611468529182],
	[47,3.7627065666017216],
	[48,5.7686167365911043],
	[49,5.08594242151745846],
	[50,1.905264426860338],
	[51,8.27642052341136036],
	[52,7.9183672429606382],
	[53,5.027341617316905],
	[54,2.8449308083068967],
	[55,6.827661569105635],
	[56,6.215632967625112],
	[57,9.831855054294463],
	[58,9.393752601741996],
	[59,11.962549642491954],
	[60,10.01016629019579],
	[61,9.03698508678906],
	[62,6.053332776990388],
	[63,4.56216961329746],
	[64,2.7601184969979364],
	[65,4.345620131013858],
	[66,3.6626759042117385],
	[67,4.27936456640813],
	[68,2.0166954203189142],
	[69,1.4881023513956224],
	[70,3.7196511214339196],
	[71,1.5333390837655454],
	[72,5.780072548768565],
	[73,4.904719814229008],
	[74,1.0799012554825165],
	[75,4.72338119051706],
	[76,6.314725021867233],
	[77,4.277597816664166],
	[78,5.1544567140954225],
	[79,5.239845249502064],
	[80,3.877879174711641],
	[81,8.225872226683242],
	[82,7.264487465012946],
	[83,6.504325850409032],
	[84,1.7088839316517497],
	[85,11.49433994707275364],
	[86,10.5002886069980867],
	[87,3.8186248032905223],
	[88,4.790166662214078],
	[89,8.584014466610698],
	[90,10.231484497623207],
	[91,11.085662593015236],
	[92,15.692957864072707],
	[93,19.729820239992353],
	[94,18.14728404932766],
	[95,13.557879905430191],
	[96,12.0222003194338],
	[97,7.527743748664358],
	[98,3.7125580070986235],
	[99,9.7561429229810717],
	[100,9.24510598794585],
	[101,13.491288627936356],
	[102,18.422574259759138],
	[103,22.48813237262491],
	[104,18.7617308169055],
	[105,15.200987690731651],
	[106,14.567673790440317],
	[107,14.493364129654488],
	[108,12.06862995100759],
	[109,13.792354597964184],
	[110,13.398123710429495],
	[111,15.43357006142243],
	[112,15.838711304223441],
	[113,17.717113116366015],
	[114,14.363451521168152],
	[115,10.632076034419065],
	[116,12.704986280918988],
	[117,14.730515775966076],
	[118,18.64339616589121],
	[119,22.966268490839116],
	[120,18.086847938929818],
];


$(function(){
	'use strict'

	// Bar Chart
	$.plot('#flotBarGraph', [{
		data: flotBarData,
		color: ['#ee3926', '#262b31', '#434950', '#63686f', '#868a90'],
	}], {
		series: {
			bars: {
				show: true,
				lineWidth: 0,
				barWidth: .55,
				fill: 1
			}
		},
		grid: {
			hoverable: true,
			borderWidth: 1,
			borderColor: '#f0f1f7'
		},
		yaxis: {
			max: 60,
			tickColor: '#f0f1f7',
			ticks: 4,
			font: {
				color: '#666666',
				size: 10
			}
		},
		xaxis: {
			max: 30,
			tickColor: '#f0f1f7',
			font: {
				color: '#666666',
				size: 10
			}
		},
		tooltip: {
			show: true,
			shifts: {
			  x: 20,
			  y: 0
			},
			defaultTheme: false
		},
	});

});


/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'silkcons\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-expand' : '&#xe000;',
			'icon-expand-2' : '&#xe001;',
			'icon-shrink' : '&#xe002;',
			'icon-shrink-2' : '&#xe003;',
			'icon-plus' : '&#xe004;',
			'icon-minus' : '&#xe005;',
			'icon-notes' : '&#xe006;',
			'icon-notebook' : '&#xe007;',
			'icon-popout' : '&#xe008;',
			'icon-popout-2' : '&#xe009;',
			'icon-arrow-down' : '&#xe00a;',
			'icon-arrow-up' : '&#xe00b;',
			'icon-arrow-left' : '&#xe00c;',
			'icon-arrow-right' : '&#xe00d;',
			'icon-arrow-down-2' : '&#xe00e;',
			'icon-arrow-up-2' : '&#xe00f;',
			'icon-arrow-left-2' : '&#xe010;',
			'icon-arrow-right-2' : '&#xe011;',
			'icon-target' : '&#xe012;',
			'icon-clock' : '&#xe013;',
			'icon-cloud' : '&#xe014;',
			'icon-cloud-2' : '&#xe015;',
			'icon-mobile' : '&#xe016;',
			'icon-expand-3' : '&#xe017;',
			'icon-contract' : '&#xe018;',
			'icon-chart' : '&#xe019;',
			'icon-checkmark' : '&#xe01a;',
			'icon-cancel' : '&#xe01b;',
			'icon-enter' : '&#xe01c;',
			'icon-exit' : '&#xe01d;',
			'icon-download' : '&#xe01e;',
			'icon-upload' : '&#xe01f;',
			'icon-heart' : '&#xe020;',
			'icon-heart-2' : '&#xe021;',
			'icon-heart-3' : '&#xe022;',
			'icon-vector' : '&#xe023;',
			'icon-vector-2' : '&#xe024;',
			'icon-star' : '&#xe025;',
			'icon-star-half' : '&#xe026;',
			'icon-star-empty' : '&#xe027;',
			'icon-eraser' : '&#xe028;',
			'icon-pencil' : '&#xe029;',
			'icon-calendar' : '&#xe02a;',
			'icon-marker' : '&#xe02b;',
			'icon-arrow' : '&#xe02c;',
			'icon-arrow-2' : '&#xe02d;',
			'icon-undo' : '&#xe02e;',
			'icon-redo' : '&#xe02f;',
			'icon-console' : '&#xe030;',
			'icon-picture' : '&#xe031;',
			'icon-droplet' : '&#xe032;',
			'icon-droplet-2' : '&#xe033;',
			'icon-arrow-up-3' : '&#xe034;',
			'icon-arrow-down-3' : '&#xe035;',
			'icon-arrow-left-3' : '&#xe036;',
			'icon-arrow-right-3' : '&#xe037;',
			'icon-pictures' : '&#xe038;',
			'icon-frame' : '&#xe039;',
			'icon-cloud-play' : '&#xe03a;',
			'icon-cover-flow' : '&#xe03b;',
			'icon-columns' : '&#xe03c;',
			'icon-list' : '&#xe03d;',
			'icon-icons' : '&#xe03e;',
			'icon-home' : '&#xe03f;',
			'icon-office' : '&#xe040;',
			'icon-camera' : '&#xe041;',
			'icon-redo-2' : '&#xe042;',
			'icon-refresh' : '&#xe043;',
			'icon-undo-2' : '&#xe044;',
			'icon-credit-card' : '&#xe045;',
			'icon-podcast' : '&#xe046;',
			'icon-share' : '&#xe047;',
			'icon-calculator' : '&#xe048;',
			'icon-play' : '&#xe049;',
			'icon-search' : '&#xe04a;',
			'icon-chat' : '&#xe04b;',
			'icon-umbrella' : '&#xe04c;',
			'icon-drops' : '&#xe04d;',
			'icon-sun' : '&#xe04e;',
			'icon-battery-empty' : '&#xe04f;',
			'icon-battery-charging' : '&#xe050;',
			'icon-battery-low' : '&#xe051;',
			'icon-battery' : '&#xe052;',
			'icon-battery-full' : '&#xe053;',
			'icon-battery-warning' : '&#xe054;',
			'icon-grass' : '&#xe055;',
			'icon-food' : '&#xe056;',
			'icon-pointer' : '&#xe057;',
			'icon-drawer' : '&#xe058;',
			'icon-envelope' : '&#xe059;',
			'icon-rainbow' : '&#xe05a;',
			'icon-trashcan' : '&#xe05b;',
			'icon-lollipop' : '&#xe05c;',
			'icon-contrast' : '&#xe05d;',
			'icon-crop' : '&#xe05e;',
			'icon-stamp' : '&#xe05f;',
			'icon-boat' : '&#xe060;',
			'icon-puzzle' : '&#xe061;',
			'icon-tshirt' : '&#xe062;',
			'icon-yinyang' : '&#xe063;',
			'icon-watch' : '&#xe064;',
			'icon-bars' : '&#xe065;',
			'icon-wand' : '&#xe066;',
			'icon-music' : '&#xe067;',
			'icon-music-2' : '&#xe068;',
			'icon-checklist' : '&#xe069;',
			'icon-notes-2' : '&#xe06a;',
			'icon-power' : '&#xe06b;',
			'icon-folder' : '&#xe06c;',
			'icon-broadcast' : '&#xe06d;',
			'icon-locked' : '&#xe06e;',
			'icon-unlocked' : '&#xe06f;',
			'icon-desktop' : '&#xe070;',
			'icon-warning' : '&#xe071;',
			'icon-happy' : '&#xe072;',
			'icon-fence' : '&#xe073;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};
/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'iconminia\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-home' : '&#xe000;',
			'icon-list' : '&#xe001;',
			'icon-book' : '&#xe002;',
			'icon-pencil' : '&#xe003;',
			'icon-bookmark' : '&#xe004;',
			'icon-pointer' : '&#xe005;',
			'icon-cloud' : '&#xe006;',
			'icon-cloud-ul' : '&#xe007;',
			'icon-cloud-dl' : '&#xe008;',
			'icon-search' : '&#xe009;',
			'icon-folder' : '&#xe00a;',
			'icon-trashcan' : '&#xe00b;',
			'icon-droplet' : '&#xe00c;',
			'icon-tag' : '&#xe00d;',
			'icon-moon' : '&#xe00e;',
			'icon-eye' : '&#xe00f;',
			'icon-target' : '&#xe010;',
			'icon-blocked' : '&#xe011;',
			'icon-switch' : '&#xe012;',
			'icon-goal' : '&#xe013;',
			'icon-location' : '&#xe014;',
			'icon-close' : '&#xe015;',
			'icon-checkmark' : '&#xe016;',
			'icon-munis' : '&#xe017;',
			'icon-plus' : '&#xe018;',
			'icon-close-2' : '&#xe019;',
			'icon-divide' : '&#xe01a;',
			'icon-minus' : '&#xe01b;',
			'icon-plus-2' : '&#xe01c;',
			'icon-equals' : '&#xe01d;',
			'icon-cancel' : '&#xe01e;',
			'icon-minus-2' : '&#xe01f;',
			'icon-checkmark-2' : '&#xe020;',
			'icon-equals-2' : '&#xe021;',
			'icon-asterisk' : '&#xe022;',
			'icon-mobile' : '&#xe023;',
			'icon-tablet' : '&#xe024;',
			'icon-phone' : '&#xe025;',
			'icon-bars' : '&#xe026;',
			'icon-stack' : '&#xe027;',
			'icon-battery' : '&#xe028;',
			'icon-battery-2' : '&#xe029;',
			'icon-battery-3' : '&#xe02a;',
			'icon-calculator' : '&#xe02b;',
			'icon-bolt' : '&#xe02c;',
			'icon-list-2' : '&#xe02d;',
			'icon-grid' : '&#xe02e;',
			'icon-list-3' : '&#xe02f;',
			'icon-list-4' : '&#xe030;',
			'icon-layout' : '&#xe031;',
			'icon-equalizer' : '&#xe032;',
			'icon-equalizer-2' : '&#xe033;',
			'icon-cog' : '&#xe034;',
			'icon-window' : '&#xe035;',
			'icon-window-2' : '&#xe036;',
			'icon-window-3' : '&#xe037;',
			'icon-window-4' : '&#xe038;',
			'icon-locked' : '&#xe039;',
			'icon-unlocked' : '&#xe03a;',
			'icon-shield' : '&#xe03b;',
			'icon-cart' : '&#xe03c;',
			'icon-console' : '&#xe03d;',
			'icon-office' : '&#xe03e;',
			'icon-basket' : '&#xe03f;',
			'icon-suitcase' : '&#xe040;',
			'icon-airplane' : '&#xe041;',
			'icon-file-download' : '&#xe042;',
			'icon-file-upload' : '&#xe043;',
			'icon-file' : '&#xe044;',
			'icon-file-add' : '&#xe045;',
			'icon-file-remove' : '&#xe046;',
			'icon-bars-2' : '&#xe047;',
			'icon-chart' : '&#xe048;',
			'icon-stats' : '&#xe049;',
			'icon-arrow-right' : '&#xe04a;',
			'icon-arrow-left' : '&#xe04b;',
			'icon-arrow-down' : '&#xe04c;',
			'icon-arrow-up' : '&#xe04d;',
			'icon-arrow-right-2' : '&#xe04e;',
			'icon-arrow-left-2' : '&#xe04f;',
			'icon-arrow-up-2' : '&#xe050;',
			'icon-arrow-down-2' : '&#xe051;',
			'icon-arrow-down-left' : '&#xe052;',
			'icon-arrow-down-right' : '&#xe053;',
			'icon-arrow-up-left' : '&#xe054;',
			'icon-arrow-up-right' : '&#xe055;',
			'icon-arrow-left-3' : '&#xe056;',
			'icon-arrow-right-3' : '&#xe057;',
			'icon-arrow-down-3' : '&#xe058;',
			'icon-arrow-up-3' : '&#xe059;',
			'icon-move' : '&#xe05a;',
			'icon-movie' : '&#xe05b;',
			'icon-refresh' : '&#xe05c;',
			'icon-picture' : '&#xe05d;',
			'icon-music' : '&#xe05e;',
			'icon-disk' : '&#xe05f;',
			'icon-camera' : '&#xe060;',
			'icon-film' : '&#xe061;',
			'icon-tablet-2' : '&#xe062;',
			'icon-ipod' : '&#xe063;',
			'icon-camera-2' : '&#xe064;',
			'icon-mouse' : '&#xe065;',
			'icon-volume' : '&#xe066;',
			'icon-monitor' : '&#xe067;',
			'icon-thumbs-up' : '&#xe068;',
			'icon-thumbs-down' : '&#xe069;',
			'icon-neutral' : '&#xe06a;',
			'icon-grin' : '&#xe06b;',
			'icon-heart' : '&#xe06c;',
			'icon-pacman' : '&#xe06d;',
			'icon-star' : '&#xe06e;',
			'icon-star-2' : '&#xe06f;',
			'icon-envelope' : '&#xe070;',
			'icon-comment' : '&#xe071;',
			'icon-comment-2' : '&#xe072;',
			'icon-user' : '&#xe073;',
			'icon-download' : '&#xe074;',
			'icon-upload' : '&#xe075;',
			'icon-inbox' : '&#xe076;',
			'icon-partial' : '&#xe077;',
			'icon-unchecked' : '&#xe078;',
			'icon-checked' : '&#xe079;',
			'icon-circles' : '&#xe07a;',
			'icon-pencil-2' : '&#xe07b;',
			'icon-flag' : '&#xe07c;',
			'icon-link' : '&#xe07d;',
			'icon-stop' : '&#xe07e;',
			'icon-play' : '&#xe07f;',
			'icon-pause' : '&#xe080;',
			'icon-next' : '&#xe081;',
			'icon-previous' : '&#xe082;',
			'icon-drink' : '&#xe083;',
			'icon-drink-2' : '&#xe084;',
			'icon-hamburger' : '&#xe085;',
			'icon-mug' : '&#xe086;',
			'icon-calendar' : '&#xe087;',
			'icon-clock' : '&#xe088;',
			'icon-calendar-2' : '&#xe089;',
			'icon-compass' : '&#xe08a;'
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
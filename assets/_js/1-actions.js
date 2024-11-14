window.siteui.initEventListeners = function(){
	var dataActionBtns = document.querySelectorAll('[data-action]:not(.elinit)');
	if( dataActionBtns.length ) {
		var _action, _method;
		for( var i = 0; i < dataActionBtns.length; i++ ) {
			dataActionBtns[i].classList.add('elinit');
			_method = dataActionBtns[i].getAttribute('data-action');
			_action = 'click';
			if( dataActionBtns[i].hasAttribute('data-trigger') ) {
				_action = dataActionBtns[i].getAttribute('data-trigger');
			}
			if (typeof window.siteui[_method] != 'undefined') {
				dataActionBtns[i].addEventListener( _action, window.siteui[_method] );
				dataActionBtns[i].addEventListener( _action, function(){
					window.siteui.doAction(this.getAttribute('data-action'));
				});
			} else {
				console.error({action: _action, method: _method, message: 'Action Missing', element: dataActionBtns[i]});
			}
		}
	}
};

window.siteui.addAction('init',window.siteui.initEventListeners);
window.siteui.incInitWindowLoadScript(window.siteui.initEventListeners);
window.siteui = window.siteui || {};
window.siteui.__initScripts = [];
window.siteui.__initWindowLoadScripts = [];
window.siteui.__initWindowResizeScripts = [];
window.siteui.__initWindowScrollScripts = [];
window.siteui.__externalLibraries = [];
window.siteui.__externalLibrariesCallbacks = [];

runCore = function(e){
    //Run these scripts when page has loaded and DOM is ready.
    if( window.siteui.__initScripts.length ) {
        for( var i = 0; i < window.siteui.__initScripts.length; i++ ) {
            if( typeof window.siteui.__initScripts[i] === 'function' ) {
                window.siteui.__initScripts[i]();
                delete window.siteui.__initScripts[i];
            }
        }
    }

    //Run these scripts when all assets are loaded.
    window.addEventListener('load',function(e){
        if( window.siteui.__initWindowLoadScripts.length ) {
            for( var i = 0; i < window.siteui.__initWindowLoadScripts.length; i++ ) {
                if( typeof window.siteui.__initWindowLoadScripts[i] === 'function' ) {
                    window.siteui.__initWindowLoadScripts[i]();
                    delete window.siteui.__initWindowLoadScripts[i];
                }
            }
        }
    });

    //Run these scripts when page is resized.
    window.addEventListener('resize',function(e){
        if( window.siteui.__initWindowResizeScripts.length ) {
            for( var i = 0; i < window.siteui.__initWindowResizeScripts.length; i++ ) {
                window.siteui.__initWindowResizeScripts[i]();
            }
        }
    });

    //Run these scripts when page is scrolled.
    window.addEventListener('scroll',function(e){
        if( window.siteui.__initWindowScrollScripts.length ) {
            for( var i = 0; i < window.siteui.__initWindowScrollScripts.length; i++ ) {
                window.siteui.__initWindowScrollScripts[i]();
            }
        }
    });
};


window.siteui.generateUUID = function() {
    return Math.random().toString(36).substring(2)
        + (new Date()).getTime().toString(36);
};

window.siteui.incInitScript = function( ref ){
    window.siteui.__initScripts.push(ref);
};

window.siteui.incInitWindowLoadScript = function( ref ){
    window.siteui.__initWindowLoadScripts.push(ref);
};

window.siteui.incInitWindowResizeScript = function( ref ){
    window.siteui.__initWindowResizeScripts.push(ref);
};

window.siteui.incInitWindowScrollScript = function( ref ){
    window.siteui.__initWindowScrollScripts.push(ref);
};

window.siteui.addAction = function (action, ref, obj) {
	if (typeof window.siteui['__action_' + action] === 'undefined') {
		window.siteui['__action_' + action] = [];
	}

	window.siteui['__action_' + action].push({
		ref: ref,
		data: obj
	});
};

window.siteui.doAction = async function (action) {
	if (typeof window.siteui['__action_' + action] != 'undefined' && window.siteui['__action_' + action].length) {
		for (var i = 0; i < window.siteui['__action_' + action].length; i++) {
			if (typeof window.siteui['__action_' + action][i].ref === 'function') {
				window.siteui['__action_' + action][i].ref(window.siteui['__action_' + action][i].data);
			} else {
				console.log(window.siteui['__action_' + action][i].ref);
			}
		}
	}
};

window.siteui.loadExternalLibrary = function( ref, callback ) {

    if( typeof window.siteui.__externalLibraries[ref] === 'undefined' ) {
        window.siteui.__externalLibraries[ref] = 0;
        window.siteui.__externalLibrariesCallbacks[ref] = [];
        window.siteui.__externalLibrariesCallbacks[ref].push(callback);
        let script = document.createElement('script');
        script.src = ref;
        script.onload = function(){
            window.siteui.__externalLibraries[ref] = 1;
            for( var i = 0; i < window.siteui.__externalLibrariesCallbacks[ref].length; i++ ) {
                window.siteui.__externalLibrariesCallbacks[ref][i]();
            }
        };
        document.getElementsByTagName('head')[0].appendChild(script);
    } else {
        if (window.siteui.__externalLibraries[ref] === 0) {
            window.siteui.__externalLibrariesCallbacks[ref].push(callback);
        } else {
            callback();
        }
    }
};

window.siteui.doAjax = function (path, callback, responeType = 'json') {
    var xhr = new XMLHttpRequest();
    xhr.addEventListener("load", function () {
        if (this.readyState === 4) {
            if (typeof callback == 'function') {
                callback(this.response);
            }
        }
    });

    xhr.responseType = responeType;
    xhr.open('GET', '/ajax.php?action=' + path);
    xhr.send();
};

window.siteui.doAjaxPost = function (path, data, callback) {
    var xhr = new XMLHttpRequest();
    xhr.addEventListener("load", function () {
        if (this.readyState === 4) {
            if (typeof callback == 'function') {
                callback(this.response);
            }
        }
    });

    xhr.responseType = 'json';
    xhr.open('POST', '/ajax.php?action=' + path);
    xhr.send(JSON.stringify(data));
};

window.siteui.doRemoteAjax = function (path, callback) {
    var xhr = new XMLHttpRequest();
    xhr.addEventListener("load", function () {
        if (this.readyState === 4) {
            if (typeof callback == 'function') {
                callback(this.response);
            }
        }
    });

    xhr.responseType = 'json';
    xhr.open('GET', path);
    xhr.send();
};


window.siteui.awaitAjax = function(path) {
    return new Promise(resolve => {
        var xhr = new XMLHttpRequest();
        xhr.addEventListener("load", function () {
            if (this.readyState === 4) {
                resolve(this.response);
            }
        });

        xhr.responseType = 'json';
        xhr.open('GET', '/ajax.php?action=' + path);
        xhr.send();
    });
};
function myWidget( element_id, userConfig ) {
    var el;
    var loader;
    var iframe;
    var style;
    var config = {
        login: 'averin.pro'
    };
    var jsonData;

    function init() {
        el = document.querySelector(element_id);
        for( let i in userConfig ) {
            config[i] = userConfig[i];
        }
        build();
    }

    function build() {
        style = document.createElement('style');
        style.innerHTML = `
        .myWidget_loader {
            border: 4px solid #f3f3f3;
            border-radius: 50%;
            border-top: 4px solid #666;
            width: 20px;
            height: 20px;
            -webkit-animation: myWidgetSpin 2s linear infinite; /* Safari */
            animation: myWidgetSpin 2s linear infinite;
            margin: 0px auto;
        }
        @keyframes myWidgetSpin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); } 
        }
        @-webkit-keyframes myWidgetSpin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        } 
        `;
        document.head.appendChild(style);

        loader = document.createElement('div');
        loader.className = 'myWidget_loader';

        el.appendChild(loader);
        afterBuild();
    }

    function afterBuild() {
        iframe = document.createElement('iframe');
        iframe.style.visibility = 'hidden';
        iframe.src = 'https://averin.pro/widget.html?' + (new URLSearchParams(config).toString());
        //iframe.id = "myWidget_iframe";
        iframe.style.border = 0;
        el.appendChild(iframe);
    }

    window.addEventListener('message', function (event) {
        loader.remove();
        style.remove();
        if (event.data.hasOwnProperty("FrameHeight")) {
            iframe.height = event.data.FrameHeight;
            iframe.style.height = event.data.FrameHeight;
        }
        if (event.data.hasOwnProperty("FrameWidth")) {
            iframe.width = event.data.FrameWidth;
            iframe.style.width = event.data.FrameWidth;
        }
        iframe.style.visibility = 'visible';
    });

init();
}
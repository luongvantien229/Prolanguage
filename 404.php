<section class="error-body">
	<video preload="auto" class="background" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/396624/err.mp4" autoplay muted loop></video>
	<div class="message">
		<h1 t="404">404</h1>
		<div class="bottom">
			<p>You have lost your way</p>
			<a href="index.php">return home</a>
		</div>
	</div>
</section>
<style>
    :root {
    box-sizing: border-box;
    cursor: default;
}
::selection {
    color: #11111b;
    background-color: #c0dc67;
}
html, body {
    width: 100%;
    height: 100%;
    background-color: #11111b;
    color: #ff6600;
    font-size: calc(6.4px + 0.8125vw);
}
.error-body {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.error-body:before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #ff6600;
    mix-blend-mode: overlay;
    z-index: 1;
}
.error-body:after {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, #11111b 21px, transparent 1%) center, linear-gradient(#11111b 21px, transparent 1%) center, white;
    background-size: 22px 22px;
    background-position: center;
    opacity: .2;
    z-index: 1;
}
.error-body .background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    filter: grayscale(1);
    mix-blend-mode: luminosity;
}
.error-body .message {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    z-index: 3;
}
.error-body .message h1 {
    position: absolute;
    top: 10%;
    left: 0%;
    width: 100%;
    font-size: 10em;
    margin: 0;
    animation: shake 600ms ease-in-out infinite alternate;
    text-shadow: 0 0 0.07em #ff6600, -0.2em 0 2em rgba(175, 211, 61, 0.3), 0.2em 0 2em rgba(175, 211, 61, 0.3);
    user-select: none;
}
.error-body .message h1:before {
    content: attr(t);
    position: absolute;
    left: 50%;
    transform: translate(-50%, 0.34em);
    height: .1em;
    line-height: .5em;
    width: 100%;
    animation: scan 500ms ease-in-out infinite alternate 209ms, glitch-anim 300ms ease-in-out infinite alternate;
    overflow: hidden;
    opacity: .7;
}
.error-body .message h1:after {
    content: attr(t);
    position: absolute;
    top: -18px;
    left: 50%;
    transform: translate(-50%, 0.34em);
    height: .5em;
    line-height: .1em;
    width: 100%;
    animation: scan 665ms ease-in-out infinite alternate 391ms, glitch-anim 300ms ease-in-out infinite alternate;
    overflow: hidden;
    opacity: .8;
}
.error-body .message .bottom {
    position: absolute;
    top: 65%;
    left: 0;
    width: 100%;
}
.error-body .message p, .error-body .message a {
    font-size: 2em;
    font-family: monospace;
    text-shadow: 0 0 5px #ff6600;
    filter: blur(0.8px);
}
.error-body .message a {
    position: relative;
    color: #ff6600;
    text-decoration: none;
    font-weight: 700;
    border: 2px solid #ff6600;
    text-transform: uppercase;
    padding: 5px 30px;
    box-shadow: inset 0 0 0 0 rgba(175, 211, 61, 0.2);
    transition: 25ms ease-in-out all 0ms;
    overflow: hidden;
    animation: attn 3s ease-in-out infinite;
}
.error-body .message a:hover {
    cursor: crosshair;
    box-shadow: inset 0 -2em 0 0 rgba(175, 211, 61, 0.2);
    transition: 225ms ease-in-out all 225ms;
    animation: none;
}
.error-body .message a:hover:before, .error-body .message a:hover:after {
    transform: translate(-50%, 0) scale(0, 1);
}
.error-body .message a:active {
    box-shadow: inset 0 -2em 0 0 rgba(175, 211, 61, 0.5);
    transition: 225ms ease-in-out all 225ms;
}
.error-body .message a:before, .error-body .message a:after {
    content: '';
    position: absolute;
    left: 50%;
    transform: translate(-50%, 0) scale(1, 1);
    transform-origin: center;
    background-color: #11111b;
    width: 90%;
    height: 5px;
    transition: 225ms ease-in-out all;
    mix-blend-mode: hard-light;
}
.error-body .message a:before {
    top: -4px;
}
.error-body .message a:after {
    bottom: -4px;
}
@keyframes scan {
    from, 20%, 100% {
        height: 0;
        transform: translate(-50%, 0.44em);
    }
    10%, 15% {
        height: 1em;
        line-height: .2em;
        transform: translate(-55%, 0.21em);
    }
}
@keyframe pulse {
    from {
        text-shadow: 0 0 0 #ff6600, 0 0 0 rgba(175, 211, 61, 0.3), 0 0 0 rgba(175, 211, 61, 0.3);
    }
    to {
        text-shadow: 0 0 0.07em #ff6600, -0.2em 0 2em rgba(175, 211, 61, 0.3), 0.2em 0 2em rgba(175, 211, 61, 0.3);
    }
}
@keyframes attn {
    0%, 100% {
        opacity: 1;
    }
    30%, 35% {
        opacity: .4;
    }
}
@keyframes shake {
    0%, 100% {
        transform: translate(-1px, 0);
    }
    10% {
        transform: translate(2px, 1px);
    }
    30% {
        transform: translate(-3px, 2px);
    }
    35% {
        transform: translate(2px, -3px);
        filter: blur(4px);
    }
    45% {
        transform: translate(2px, 2px) skewY(-8deg) scale(0.96, 1);
        filter: blur(0);
    }
    50% {
        transform: translate(-3px, 1px);
    }
}
@keyframes glitch-anim {
    0% {
        clip: rect(95px, 9999px, 92px, 0);
    }
    10% {
        clip: rect(24px, 9999px, 100px, 0);
    }
    20% {
        clip: rect(51px, 9999px, 24px, 0);
    }
    30% {
        clip: rect(32px, 9999px, 73px, 0);
    }
    40% {
        clip: rect(60px, 9999px, 100px, 0);
    }
    50% {
        clip: rect(50px, 9999px, 46px, 0);
    }
    60% {
        clip: rect(34px, 9999px, 70px, 0);
    }
    70% {
        clip: rect(21px, 9999px, 86px, 0);
    }
    80% {
        clip: rect(22px, 9999px, 100px, 0);
    }
    90% {
        clip: rect(54px, 9999px, 33px, 0);
    }
    100% {
        clip: rect(79px, 9999px, 77px, 0);
    }
}

</style>
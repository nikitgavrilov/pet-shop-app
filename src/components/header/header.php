<?php 
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
?>
<header class="header">
	<div class="container">
		<div class="header__body">
			<a href="main.php" class="header__logo">
				<svg fill="#000000" width="48px" height="48px" viewBox="-1 0 19 19">
					<g id="SVGRepo_bgCarrier" stroke-width="0"/>
					<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
					<g id="SVGRepo_iconCarrier">
					<path d="M16.417 9.579A7.917 7.917 0 1 1 8.5 1.662a7.917 7.917 0 0 1 7.917 7.917zm-11.293.252A1.31 1.31 0 0 0 5.648 8.1c-.267-.76-.934-1.22-1.49-1.024a1.31 1.31 0 0 0-.524 1.73c.267.761.934 1.22 1.49 1.025zm6.664.747a4.606 4.606 0 0 0-6.518 0 1.945 1.945 0 0 0 2.75 2.75.72.72 0 0 1 1.017 0 1.945 1.945 0 0 0 2.75-2.75zM5.84 6.986c.087.918.7 1.61 1.372 1.547.67-.064 1.143-.86 1.057-1.777-.087-.917-.701-1.61-1.372-1.546-.67.063-1.144.859-1.057 1.776zm4.003 1.547c.671.063 1.285-.63 1.372-1.547.087-.917-.386-1.713-1.057-1.776-.67-.064-1.285.629-1.372 1.546-.086.918.387 1.713 1.057 1.777zM12.9 7.076c-.556-.195-1.223.263-1.49 1.024a1.31 1.31 0 0 0 .524 1.73c.556.196 1.223-.263 1.49-1.024a1.31 1.31 0 0 0-.524-1.73z"/>
					</g>
				</svg>
			</a>
			<nav class="header__nav">
				<ul class="header__list">
					<?php if($url == "http://pet-shop/src/pages/products.php") { ?>
					<li class="header__item">
						<a href="products.php">Продукция</a>
					</li>
					<li class="header__item">
						<a href="pets.php">Забота о животных</a>
					</li>
					<?php }
					if ($url == "http://pet-shop/src/pages/main.php") {
					?>
					<li class="header__item">
						<a href="products.php">Продукция</a>
					</li>
					<li class="header__item">
						<a href="pets.php">Забота о животных</a>
					</li>
					<li class="header__item" id="popular-btn">Популярное</li>
					<li class="header__item" id="feedback-btn">Обратная связь</li>		
					<?php } ?>			
					<div class="hidden-items">
					<?php if (isset($_COOKIE['user_login'])) {?>
						<li class="hidden-item">
							<svg fill="#000000" width="28px" height="28px" viewBox="0 0 32 32">
								<g id="SVGRepo_bgCarrier" stroke-width="0"/>
								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
								<g id="SVGRepo_iconCarrier"> <path d="M31.739 8.875c-0.186-0.264-0.489-0.422-0.812-0.422h-21.223l-1.607-5.54c-0.63-2.182-2.127-2.417-2.741-2.417h-4.284c-0.549 0-0.993 0.445-0.993 0.993s0.445 0.993 0.993 0.993h4.283c0.136 0 0.549 0 0.831 0.974l5.527 20.311c0.12 0.428 0.511 0.724 0.956 0.724h13.499c0.419 0 0.793-0.262 0.934-0.657l4.758-14.053c0.11-0.304 0.064-0.643-0.122-0.907zM25.47 22.506h-12.046l-3.161-12.066h19.253zM23.5 26.504c-1.381 0-2.5 1.119-2.5 2.5s1.119 2.5 2.5 2.5 2.5-1.119 2.5-2.5c0-1.381-1.119-2.5-2.5-2.5zM14.5 26.504c-1.381 0-2.5 1.119-2.5 2.5s1.119 2.5 2.5 2.5 2.5-1.119 2.5-2.5c0-1.381-1.119-2.5-2.5-2.5z"/> </g>
							</svg>
						</li>
						<li class="hidden-item">
							<a href="account.php">
							<svg width="28px" height="28px" viewBox="0 0 32 32" fill="#000000" stroke="#000000" stroke-width="0.64">
								<g id="SVGRepo_bgCarrier" stroke-width="0"/>
								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
								<g id="SVGRepo_iconCarrier"> <g id="profile_x2C__person"> <g> <g> <g> <path d="M16,31C7.729,31,1,24.271,1,16S7.729,1,16,1s15,6.729,15,15S24.271,31,16,31z M16,2C8.28,2,2,8.28,2,16 s6.28,14,14,14s14-6.28,14-14S23.72,2,16,2z" fill="#263238"/> </g> </g> </g> <g> <g id="team_3_"> <g> <g> <g> <g> <path d="M23.64,20.713l-4.762-1.652l-0.323-2.584c-0.215,0.307-0.523,0.546-0.924,0.671l0.293,2.345 c0.023,0.189,0.152,0.349,0.332,0.41l5.055,1.756c0.9,0.314,1.689,1.427,1.689,2.381v-0.007c0,0.276,0.224,0.5,0.5,0.5 c0.275,0,0.499-0.223,0.5-0.498C25.997,22.656,24.94,21.168,23.64,20.713z" fill="#263238"/> </g> </g> </g> </g> <g> <g> <g> <g> <path d="M6.5,24.532c-0.276,0-0.5-0.224-0.5-0.5v0.007c0-1.379,1.059-2.871,2.359-3.326l4.762-1.641 l0.012-0.28c0.034-0.274,0.289-0.465,0.559-0.434c0.273,0.034,0.468,0.284,0.434,0.559l-0.051,0.589 c-0.023,0.189-0.153,0.348-0.333,0.41l-5.054,1.742C7.789,21.973,7,23.086,7,24.039v-0.007C7,24.309,6.776,24.532,6.5,24.532 z" fill="#263238"/> </g> </g> </g> </g> <g> <g> <g> <g> <g> <path d="M16,18.039c-2.779,0-4.192-1.844-4.201-6.469c-0.002-1.174,0.123-2.363,1.227-3.469 C13.729,7.396,14.729,7.039,16,7.039s2.271,0.357,2.975,1.063c1.104,1.105,1.229,2.295,1.227,3.469 C20.192,16.195,18.779,18.039,16,18.039z M16,8.039c-1.009,0-1.75,0.252-2.267,0.769c-0.632,0.633-0.938,1.2-0.935,2.761 c0.008,4.018,1.055,5.471,3.201,5.471s3.193-1.453,3.201-5.471c0.003-1.561-0.303-2.128-0.935-2.761 C17.75,8.291,17.009,8.039,16,8.039z" fill="#263238"/> </g> </g> </g> </g> </g> </g> </g> </g> </g>
							</svg>
							</a>
						</li>
						<li class="hidden-item">
							<form action="../php/auth/exit.php" class="account__exit">
								<button>Выйти</button>
							</form>
						</li>
						<?php } ?>
					</div>
				</ul>
			</nav>
			<?php if (isset($_COOKIE['user_login'])) {?>
			<div class="header__account account">
				<div class="account__basket">
					<?php if ($url != "http://pet-shop/src/pages/account.php") { ?>
					<a href="account.php">
						<svg fill="#000000" width="28px" height="28px" viewBox="0 0 32 32">
							<g id="SVGRepo_bgCarrier" stroke-width="0"/>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
							<g id="SVGRepo_iconCarrier"> <path d="M31.739 8.875c-0.186-0.264-0.489-0.422-0.812-0.422h-21.223l-1.607-5.54c-0.63-2.182-2.127-2.417-2.741-2.417h-4.284c-0.549 0-0.993 0.445-0.993 0.993s0.445 0.993 0.993 0.993h4.283c0.136 0 0.549 0 0.831 0.974l5.527 20.311c0.12 0.428 0.511 0.724 0.956 0.724h13.499c0.419 0 0.793-0.262 0.934-0.657l4.758-14.053c0.11-0.304 0.064-0.643-0.122-0.907zM25.47 22.506h-12.046l-3.161-12.066h19.253zM23.5 26.504c-1.381 0-2.5 1.119-2.5 2.5s1.119 2.5 2.5 2.5 2.5-1.119 2.5-2.5c0-1.381-1.119-2.5-2.5-2.5zM14.5 26.504c-1.381 0-2.5 1.119-2.5 2.5s1.119 2.5 2.5 2.5 2.5-1.119 2.5-2.5c0-1.381-1.119-2.5-2.5-2.5z"/> </g>
						</svg>
					</a>
					<?php } ?>
				</div>
				<?php if ($url != "http://pet-shop/src/pages/account.php") { ?>
				<form action="../php/auth/exit.php" class="account__exit">
					<button>Выйти</button>
				</form>
				<?php } ?>
			</div>
			<?php } else { ?>
				<div class="account_personal">
					<a href="reg.php">
					<svg width="28px" height="28px" viewBox="0 0 32 32" fill="#000000" stroke="#000000" stroke-width="0.64">
						<g id="SVGRepo_bgCarrier" stroke-width="0"/>
						<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
						<g id="SVGRepo_iconCarrier"> <g id="profile_x2C__person"> <g> <g> <g> <path d="M16,31C7.729,31,1,24.271,1,16S7.729,1,16,1s15,6.729,15,15S24.271,31,16,31z M16,2C8.28,2,2,8.28,2,16 s6.28,14,14,14s14-6.28,14-14S23.72,2,16,2z" fill="#263238"/> </g> </g> </g> <g> <g id="team_3_"> <g> <g> <g> <g> <path d="M23.64,20.713l-4.762-1.652l-0.323-2.584c-0.215,0.307-0.523,0.546-0.924,0.671l0.293,2.345 c0.023,0.189,0.152,0.349,0.332,0.41l5.055,1.756c0.9,0.314,1.689,1.427,1.689,2.381v-0.007c0,0.276,0.224,0.5,0.5,0.5 c0.275,0,0.499-0.223,0.5-0.498C25.997,22.656,24.94,21.168,23.64,20.713z" fill="#263238"/> </g> </g> </g> </g> <g> <g> <g> <g> <path d="M6.5,24.532c-0.276,0-0.5-0.224-0.5-0.5v0.007c0-1.379,1.059-2.871,2.359-3.326l4.762-1.641 l0.012-0.28c0.034-0.274,0.289-0.465,0.559-0.434c0.273,0.034,0.468,0.284,0.434,0.559l-0.051,0.589 c-0.023,0.189-0.153,0.348-0.333,0.41l-5.054,1.742C7.789,21.973,7,23.086,7,24.039v-0.007C7,24.309,6.776,24.532,6.5,24.532 z" fill="#263238"/> </g> </g> </g> </g> <g> <g> <g> <g> <g> <path d="M16,18.039c-2.779,0-4.192-1.844-4.201-6.469c-0.002-1.174,0.123-2.363,1.227-3.469 C13.729,7.396,14.729,7.039,16,7.039s2.271,0.357,2.975,1.063c1.104,1.105,1.229,2.295,1.227,3.469 C20.192,16.195,18.779,18.039,16,18.039z M16,8.039c-1.009,0-1.75,0.252-2.267,0.769c-0.632,0.633-0.938,1.2-0.935,2.761 c0.008,4.018,1.055,5.471,3.201,5.471s3.193-1.453,3.201-5.471c0.003-1.561-0.303-2.128-0.935-2.761 C17.75,8.291,17.009,8.039,16,8.039z" fill="#263238"/> </g> </g> </g> </g> </g> </g> </g> </g> </g>
					</svg>
					</a>
				</div>
			<?php } ?>
			<?php if ($url != "http://pet-shop/src/pages/account.php") { ?>
			<div class="header__burger">
				<span></span>
			</div>
			<?php } else { ?>
				<form action="../php/auth/exit.php" class="account__exit">
					<button>Выйти</button>
				</form>
			<?php } ?>
		</div>
	</div>
</header>
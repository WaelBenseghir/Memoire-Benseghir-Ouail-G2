<?php 
    session_start();
    $isAdmin = isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/plant-base.css">
    <title>Plant DataBase</title>
</head>

<body>
    <header class="header container">
        <svg class="logo" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill="#1C4920"
            viewBox="0 0 511.997 511.997">
            <path
                d="M502.731 195.325a7.323 7.323 0 0 0-.405-2.036c-.027-.079-.053-.159-.082-.236a7.925 7.925 0 0 0-.228-.528c-.029-.063-.056-.127-.087-.19a8.104 8.104 0 0 0-.307-.543c-.029-.049-.056-.1-.088-.148a7.363 7.363 0 0 0-.394-.549c-.026-.035-.05-.071-.077-.105a7.892 7.892 0 0 0-.542-.605 7.885 7.885 0 0 0-.605-.543c-.047-.038-.098-.07-.146-.107a7.484 7.484 0 0 0-.503-.361c-.066-.043-.135-.079-.203-.12a8.194 8.194 0 0 0-.48-.273c-.083-.043-.17-.079-.255-.119-.15-.069-.3-.137-.454-.196-.102-.04-.206-.073-.309-.108a6.254 6.254 0 0 0-.772-.217 7.855 7.855 0 0 0-.775-.133 8.819 8.819 0 0 0-.399-.035c-.124-.008-.247-.016-.371-.018a7.153 7.153 0 0 0-.463.01c-.078.004-.157-.001-.236.005-1.051.078-26.124 2.058-59.698 12.312a319.792 319.792 0 0 0-28.259 10.099 118.54 118.54 0 0 0 8.342-10.692c29.137-42.208 23.839-95.382 23.599-97.625-.008-.071-.024-.139-.035-.211a7.47 7.47 0 0 0-.08-.494c-.02-.102-.046-.202-.07-.303a7.495 7.495 0 0 0-.406-1.211c-.037-.085-.074-.17-.114-.254a7.591 7.591 0 0 0-.248-.473c-.04-.07-.078-.141-.12-.212a7.375 7.375 0 0 0-.324-.482c-.04-.056-.077-.113-.118-.168a6.963 6.963 0 0 0-.4-.477c-.039-.043-.074-.089-.114-.131a7.65 7.65 0 0 0-.476-.458c-.037-.033-.069-.068-.107-.101a7.91 7.91 0 0 0-.641-.496l-.001-.001-.001-.001c-.008-.006-.017-.01-.025-.015a7.706 7.706 0 0 0-.665-.408c-.052-.028-.107-.051-.159-.077a7.366 7.366 0 0 0-.569-.269c-.061-.025-.124-.045-.186-.069a7.646 7.646 0 0 0-.563-.195c-.072-.021-.147-.038-.22-.057a6.952 6.952 0 0 0-.542-.125c-.086-.016-.173-.027-.26-.041a7.254 7.254 0 0 0-1.6-.072 7.084 7.084 0 0 0-.46.044c-.107.013-.214.025-.322.043a7.067 7.067 0 0 0-.481.099c-.072.016-.144.025-.216.045-2.184.573-53.817 14.529-82.951 56.736-4.323 6.261-7.882 12.764-10.818 19.306-4.797-45.31-21.564-85.182-35.988-112.282-18.407-34.583-36.626-55.906-37.393-56.797-.05-.058-.107-.109-.159-.166-.108-.117-.216-.234-.331-.344-.078-.076-.161-.148-.242-.22a7.22 7.22 0 0 0-1.008-.755 7.875 7.875 0 0 0-.249-.152 7.79 7.79 0 0 0-.462-.242c-.076-.037-.152-.075-.229-.11a8.018 8.018 0 0 0-.527-.209c-.068-.024-.135-.052-.205-.074a7.652 7.652 0 0 0-.585-.162c-.061-.015-.121-.034-.182-.047a7.756 7.756 0 0 0-.634-.104c-.054-.007-.107-.019-.162-.024a6.919 6.919 0 0 0-.814-.048c-.274 0-.544.016-.811.044-.054.006-.108.017-.162.024a7.348 7.348 0 0 0-.634.104c-.061.013-.121.033-.182.047a8.14 8.14 0 0 0-.585.162c-.069.022-.135.05-.203.074a7.333 7.333 0 0 0-.528.209c-.077.035-.152.073-.228.11a7.53 7.53 0 0 0-.463.243 7.682 7.682 0 0 0-.246.15 7.253 7.253 0 0 0-1.013.759c-.079.07-.159.14-.236.215-.118.114-.23.234-.341.355-.049.054-.103.102-.151.157-.766.891-18.986 22.214-37.393 56.797-15.185 28.529-32.957 71.214-36.637 119.495-3.406-8.946-7.898-17.958-13.808-26.518-29.134-42.206-80.767-56.162-82.951-56.736-.064-.017-.129-.024-.194-.04a8.057 8.057 0 0 0-.509-.105 8.24 8.24 0 0 0-.305-.041 7.656 7.656 0 0 0-.781-.056 8.181 8.181 0 0 0-.775.022 7.956 7.956 0 0 0-.532.064c-.079.012-.158.022-.236.037a7.678 7.678 0 0 0-.574.132c-.063.017-.127.031-.189.049a7.04 7.04 0 0 0-.602.21c-.05.019-.1.035-.15.055a7.804 7.804 0 0 0-.607.287c-.041.021-.082.038-.123.06a7.953 7.953 0 0 0-.672.411l-.022.013h-.001l-.002.001a7.74 7.74 0 0 0-.641.496c-.038.033-.07.068-.108.102a7.098 7.098 0 0 0-.477.455c-.041.043-.076.09-.116.133a7.756 7.756 0 0 0-.398.475c-.042.055-.079.113-.119.169a7.617 7.617 0 0 0-.323.481c-.043.069-.08.14-.12.212a7.345 7.345 0 0 0-.248.473c-.04.084-.077.17-.114.255a8.614 8.614 0 0 0-.28.749c-.048.153-.09.306-.127.461-.024.101-.05.201-.07.303a6.864 6.864 0 0 0-.08.494c-.009.071-.026.139-.035.211-.24 2.243-5.537 55.416 23.599 97.625a117.43 117.43 0 0 0 6.521 8.562 321.807 321.807 0 0 0-22.942-7.968c-33.574-10.253-58.647-12.233-59.698-12.312-.078-.006-.156-.001-.233-.005a7.339 7.339 0 0 0-.469-.01c-.12.002-.238.01-.358.017a7.333 7.333 0 0 0-1.195.171 7.729 7.729 0 0 0-.334.081c-.149.041-.296.089-.443.137-.097.033-.193.064-.289.102a6.852 6.852 0 0 0-.474.206c-.079.037-.16.07-.237.11-.17.086-.335.183-.5.283-.061.038-.125.07-.185.11a8.013 8.013 0 0 0-.517.371c-.044.034-.09.063-.133.098a7.74 7.74 0 0 0-.607.544 7.87 7.87 0 0 0-.542.605c-.028.034-.05.07-.077.105a7.664 7.664 0 0 0-.394.549c-.031.048-.057.099-.088.148-.11.178-.214.358-.307.543-.032.062-.058.127-.087.19-.082.174-.16.349-.228.528-.029.078-.055.158-.082.236a6.668 6.668 0 0 0-.225.781 7.302 7.302 0 0 0-.18 1.255c-.006.106-.013.211-.015.316-.003.166.003.332.01.498.003.071-.001.142.004.215.079 1.049 2.062 26.097 12.327 59.635 9.502 31.042 28.224 75.433 63.458 110.627 25.114 25.086 54.903 41.787 81.199 52.751v85.002a7.631 7.631 0 0 0 7.632 7.632h168.481a7.631 7.631 0 0 0 7.632-7.632v-86.814c25.221-10.966 53.179-27.195 76.949-50.939 35.233-35.194 53.955-79.585 63.458-110.627 10.266-33.538 12.249-58.586 12.327-59.635.005-.072.001-.142.004-.215.012-.163.018-.329.015-.495-.003-.105-.01-.21-.016-.315zm-100.36-4.109c-14.473 20.968-35.861 34.285-51.974 41.974l27.679-40.098 18.138-3.329a7.633 7.633 0 0 0 6.129-8.884 7.635 7.635 0 0 0-8.884-6.128l-3.116.572 32.824-47.551c-1.465 17.777-6.321 42.476-20.796 63.444zm-43.756-30.118c14.474-20.968 35.861-34.285 51.975-41.973l-32.824 47.551-.574-3.12c-.763-4.145-4.741-6.891-8.886-6.125a7.631 7.631 0 0 0-6.125 8.886l3.331 18.108-27.693 40.119c1.466-17.778 6.322-42.479 20.796-63.446zm114.759 45.616-69.225 69.147v-22.653a7.631 7.631 0 0 0-7.632-7.632 7.631 7.631 0 0 0-7.632 7.632v37.899l-22.093 22.068v-22.652c0-4.216-3.417-7.632-7.632-7.632s-7.632 3.416-7.632 7.632v37.898l-22.088 22.063v-22.652a7.631 7.631 0 0 0-7.632-7.632 7.631 7.631 0 0 0-7.632 7.632v37.898l-47.313 47.259c6.242-32.466 23.379-93.731 68.023-138.325 44.65-44.596 105.984-61.716 138.488-67.95zm-144.2 50.097c.287.033.575.064.863.064.318 0 .633-.022.946-.061.094-.011.185-.035.278-.05.136-.022.273-.044.408-.073-1.08.976-2.152 1.967-3.217 2.971.239-.951.492-1.902.722-2.851zm-65.472 28.105 30.308-30.274a7.633 7.633 0 0 0-10.786-10.799l-19.521 19.5v-37.502l30.308-30.275a7.633 7.633 0 0 0-10.786-10.799l-19.521 19.5v-37.513l30.308-30.275a7.633 7.633 0 0 0-10.786-10.799l-19.521 19.5V30.44a362.778 362.778 0 0 1 22.26 36.535c16.128 30.387 35.356 77.575 35.356 129.82 0 29.217-5.93 59.72-17.612 90.678-19.632 26.235-32.177 54.54-40.008 77.564v-80.121zM226.179 66.973a362.892 362.892 0 0 1 22.26-36.535V145.18l-19.523-19.501a7.633 7.633 0 0 0-10.786 10.799l30.308 30.275v37.513l-19.523-19.501a7.633 7.633 0 0 0-10.786 10.799l30.308 30.275v37.502l-19.522-19.5a7.631 7.631 0 0 0-10.786 10.799l30.308 30.274v80.535c-7.784-22.987-20.278-51.319-39.866-77.605-11.775-31.087-17.753-61.718-17.753-91.052.003-52.243 19.231-99.431 35.361-129.819zM181.787 256.11c.311-.151.609-.331.901-.525.336 1.415.688 2.833 1.047 4.25a215.242 215.242 0 0 0-3.464-3.198 7.47 7.47 0 0 0 1.516-.527zm-31.898-95.012c14.474 20.968 19.331 45.67 20.796 63.447l-27.693-40.118 3.331-18.108a7.63 7.63 0 0 0-6.125-8.886c-4.138-.768-8.123 1.979-8.886 6.125l-.574 3.12-32.857-47.598c16.097 7.661 37.477 20.968 52.008 42.018zm-64.553-33.327 32.825 47.552-3.115-.572a7.631 7.631 0 1 0-2.755 15.012l18.138 3.329 27.712 40.145c-16.096-7.665-37.477-20.972-52.007-42.022-14.476-20.968-19.333-45.668-20.798-63.444zm91.773 146.892c44.645 44.595 61.782 105.861 68.023 138.325l-47.312-47.259v-37.898a7.631 7.631 0 0 0-7.632-7.632 7.631 7.631 0 0 0-7.632 7.632v22.652l-22.088-22.063v-37.899c0-4.216-3.417-7.632-7.632-7.632s-7.632 3.416-7.632 7.632v22.652l-22.093-22.068v-37.899c0-4.216-3.417-7.632-7.632-7.632s-7.632 3.416-7.632 7.632v22.653l-69.225-69.147c32.508 6.236 93.842 23.356 138.487 67.951zm-81.268 81.152c-44.645-44.594-61.783-105.86-68.024-138.324l69.226 69.148h-22.67a7.631 7.631 0 0 0-7.632 7.632 7.631 7.631 0 0 0 7.632 7.632h37.95l22.075 22.051H111.73a7.631 7.631 0 0 0-7.632 7.632 7.631 7.631 0 0 0 7.632 7.632h37.949l22.07 22.046h-22.67a7.631 7.631 0 0 0-7.632 7.632 7.631 7.631 0 0 0 7.632 7.632h37.95l47.294 47.24c-32.504-6.238-93.838-23.357-138.482-67.953zm85.676 140.922v-12.67l84.383 12.67h-84.383zm153.217-5.099-153.218-23.006v-17.295l153.218 23.006v17.295zm.001-32.729-153.218-23.006v-10.637a324.311 324.311 0 0 0 14.283 4.733c31.459 9.608 55.454 11.952 59.217 12.274.056.007.112.019.169.024.242.023.485.036.73.036l.014.001h.002l.069-.003.069.003h.002l.014-.001c.243 0 .486-.012.73-.036.057-.005.112-.017.169-.024 3.762-.322 27.757-2.666 59.217-12.274a321.8 321.8 0 0 0 18.533-6.281v35.191zm81.424-103.093c-44.645 44.596-105.98 61.715-138.483 67.95l47.294-47.241h37.949a7.631 7.631 0 0 0 7.632-7.632 7.631 7.631 0 0 0-7.632-7.632h-22.67l22.07-22.046h37.949a7.631 7.631 0 0 0 7.632-7.632 7.631 7.631 0 0 0-7.632-7.632H377.6l22.076-22.051h37.95a7.631 7.631 0 0 0 7.632-7.632 7.631 7.631 0 0 0-7.632-7.632h-22.67l69.225-69.148c-6.24 32.468-23.377 93.733-68.022 138.328z" />
        </svg>
        <nav class="header__nav-1">
            <ul class="nav__list-1">
                <div>
                    <li class="nav__item home"><a href="main.php" class="btn-home">Home</a></li>
                    <li class="nav__item"><a href="mailto:waelcoding12@gmail.com" class="btn">Contact</a></li>
                    <li class="nav__item"><a href="https://www.reddit.com/r/farming/" target="_blank" class="btn">Community</a></li>
                </div>
                <div>
                    <?php if ($isAdmin): ?>
                        <li class="nav__item"><button class="btn add-plant">Add Plant</button></li>
                    <?php endif; ?>
                    <li class="nav__item"><a href="logout.php" class="btn">Logout</a></li>
                </div>
            </ul>
            <div class="sub-menu">
                <form id="addPlantForm" action="addPlant.php" method="POST" enctype="multipart/form-data">
                    <div class="form-div">
                        <!-- Plant Name -->
                        <input type="text" name="name" placeholder="Plant Name" required><br>

                        <!-- Plant Description -->
                        <textarea name="description" placeholder="Plant Description" required></textarea><br>

                        <!-- Category -->
                        <select name="category" required>
                            <option value="" disabled selected>Category</option>
                            <option value="Fruits & Vegetables">Fruits & Vegetables</option>
                            <option value="Herbs">Herbs</option>
                            <option value="Trees & Shrubs">Trees & Shrubs</option>
                            <option value="Flowering Plants">Flowering Plants</option>
                            <option value="Indoor Plants">Indoor Plants</option>
                        </select><br>

                        <select id="sunlight" name="sunlight" required>
                            <option value="" disabled selected>Sunlight requirement</option>
                            <option value="full-sun">Full sun (6-8 hours daily)</option>
                            <option value="partial-sun">Partial sun (4-6 hours daily)</option>
                            <option value="shade">Shade (less than 4 hours daily)</option>
                            <option value="full-sun-partial-sun">Full sun to partial sun</option>
                        </select><br>

                        <!-- Time to Maturity -->
                        <select id="maturity" name="maturity" required>
                            <option value="" disabled selected>Select time to maturity</option>
                            <option value="30-60 days">30-60 days</option>
                            <option value="60-90 days">60-90 days</option>
                            <option value="90-120 days">90-120 days</option>
                            <option value="120+ days">120+ days</option>
                            <option value="6-12 months">6-12 months</option>
                            <option value="1-2 years">1-2 years</option>
                            <option value="2-3 years">2-3 years</option>
                            <option value="3-5 years">3-5 years</option>
                            <option value="5-10 years">5-10 years</option>
                            <option value="10+ years">10+ years</option>
                        </select><br>


                        <!-- Watering Needs -->
                        <select id="watering" name="watering" required>
                            <option value="" disabled selected>Watering Needs</option>
                            <option value="low">Low (Let soil dry out between waterings)</option>
                            <option value="moderate">Moderate (Keep soil moist but not soggy)</option>
                            <option value="high">High (Keep soil consistently wet)</option>
                        </select><br>

                        <select id="soilType" name="soilType" required>
                            <option value="" disabled selected>Select soil type</option>
                            <option value="Loamy">Loamy</option>
                            <option value="Sandy">Sandy</option>
                            <option value="Clay">Clay</option>
                            <option value="Peaty">Peaty</option>
                            <option value="Chalky">Chalky</option>
                            <option value="Silty">Silty</option>
                            <option value="Rocky">Rocky</option>
                            <option value="Well-drained">Well-drained</option>
                        </select><br>
                    </div>



                    <div class="form-div">
                        <!-- Common Problems & Solutions -->
                        <textarea id="problems" name="problems" rows="4"
                            placeholder="Common Problems & Solutions: e.g., Yellow leaves? Overwatering. Reduce frequency."
                            required></textarea><br>

                        <!-- Uses -->
                        <textarea id="uses" name="uses" rows="3" placeholder="Uses: e.g., Salads, sauces, soups, juices"
                            required></textarea><br>

                        <!-- Optimal Temperature -->
                        <input type="text" id="temperature" name="temperature"
                            placeholder="Optimal Temperature (°C): e.g., 18-25°C" required><br>

                        <!-- Pests & Diseases -->
                        <textarea id="pests" name="pests" rows="3"
                            placeholder="Pests & Diseases:  e.g., Aphids, Tomato Hornworms, Blight, Powdery Mildew"
                            required></textarea><br>

                        <!-- Soil pH -->
                        <input type="text" id="soilPH" name="soilPH" placeholder="Soil pH: e.g., 6.0-6.8" required><br>
                    </div>


                    <!-- Plant Image -->
                    <div class="cta-buttons">
                        <label for="choose-file" class="sub-menu-label">Choose File</label>
                        <input type="file" id="choose-file" name="image" accept="image/*" required><br>
                        <button type="submit">Add Plant</button>
                    </div>
                </form>
            </div>
            </div>
        </nav>
        <nav class="header__nav">
            <ul class="nav__list">
                <div>
                    <li class="menu__item"><a href="main.php">Home</a></li>
                    <li class="menu__item"><a href="mailto:waelcoding12@gmail.com">Contact</a></li>
                    <li class="menu__item"><a href="https://www.reddit.com/r/farming/" target="_blank" >Community</a></li>
                </div>
                <div>
                    <li class="menu__item"><a href="index.php">Logout</a></li>
                </div>
            </ul>
            <svg class="logo menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="#1C4920" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 17h8M5 12h14m-8-5h8" />
            </svg>
        </nav>
    </header>


    <main class="main container">
        <section class="first-section">
            <div>
                <h1>Grow Your Knowledge,<br>Grow Your Plants</h1>
                <p class="first-section__desc">Discover plant care tips and expert advice to help every plant in your
                    garden thrive. Dive in, learn more, and watch
                    your greenery flourish beautifully today!</p>
            </div>
            <a href="main.php">Go to home<svg fill="#000000" width="64px" height="64px" viewBox="0 0 56 56"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M 13.8320 43.5625 C 14.4883 43.5625 14.9336 43.3516 15.4258 43.1172 L 41.7695 31.2813 C 43.1055 30.6484 44.1602 29.6172 44.1602 28.1172 C 44.1602 26.6406 43.1289 25.5625 41.7461 24.9532 L 15.4258 12.8359 C 14.9570 12.6016 14.5351 12.4375 13.9258 12.4375 C 12.7070 12.4375 11.8398 13.2813 11.8398 14.5235 C 11.8398 15.6016 12.4023 16.2110 13.3867 16.6797 L 38.6055 27.8125 L 38.6055 28.0703 L 13.3867 39.2969 C 12.4023 39.7656 11.8398 40.3750 11.8398 41.4531 C 11.8398 42.7422 12.6836 43.5625 13.8320 43.5625 Z">
                        </path>
                    </g>
                </svg></a>
        </section>



        <section class="second-section">
            <div class="categories">
                <h2>POPULAR CATEGORIES</h2>
                <div class="grid-group">
                    <div class="plant-card-html"
                        style="background-image: url('./uploads/cucumber.webp'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
                        <h3 class="plantTitle">Friuts & Vegetables</h3>
                    </div>
                    <div class="plant-card-html"
                        style="background-image: url('./uploads/cherryBlossom.webp'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
                        <h3 class="plantTitle">Trees & Shrubs</h3>
                    </div>
                    <div class="plant-card-html"
                        style="background-image: url('./uploads/orchid.webp'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
                        <h3 class="plantTitle">Flowering Plants</h3>
                    </div>
                    <div class="plant-card-html"
                        style="background-image: url('./uploads/FiddleFig.webp'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
                        <h3 class="plantTitle">Indoor Plants</h3>
                    </div>
                </div>
            </div>

            <div class="featured">
                <h2>Featured Plants</h2>
                <div class="grid-group">
                    <div class="plant-card-html" style="background-image: url('./uploads/pine.webp'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
                        <div>
                            <h3 class="plantTitle">Pine</h3>
                            <p class="plantDesc">An evergreen tree with needle-like leaves, valued for its timber, scent, and year-round greenery.</p>
                        </div>
                        <div class="plantCat"><p>Trees & Shrubs</p></div>    
                    </div>
                    
                    <div class="plant-card-html" style="background-image: url('./uploads/spinach.webp'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
                        <div>
                            <h3 class="plantTitle">Spinach</h3>
                            <p class="plantDesc">Spinach is a nutrient-rich leafy green, perfect for salads, cooking, smoothies, and healthy meals.</p>
                        </div>
                        <div class="plantCat"><p>Fruits & Vegetables</p></div>    
                    </div>

                    <div class="plant-card-html" style="background-image: url('./uploads/Hibiscus.webp'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
                        <div>
                            <h3 class="plantTitle">Hibiscus</h3>
                            <p class="plantDesc">A tropical flowering plant with large, vibrant blooms, widely used for tea and medicinal purposes.</p>
                        </div>
                        <div class="plantCat"><p>Flowering Plants</p></div>    
                    </div>

                    <div class="plant-card-html" style="background-image: url('./uploads/JadePlant.webp'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
                        <div>
                            <h3 class="plantTitle">Jade Plant</h3>
                            <p class="plantDesc">A hardy succulent with thick, fleshy leaves that stores water and is easy to care for.</p>
                        </div>
                        <div class="plantCat"><p>Indoor Plants</p></div>    
                    </div>

                    <div class="plant-card-html" style="background-image: url('./uploads/Oregano.webp'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
                        <div>
                            <h3 class="plantTitle">Oregano</h3>
                            <p class="plantDesc">Oregano is a flavorful herb, commonly used in pizzas, pastas, and Mediterranean dishes.</p>
                        </div>
                        <div class="plantCat"><p>Herbs</p></div>    
                    </div>

                    <div class="plant-card-html" style="background-image: url('./uploads/BellPepper.webp'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
                        <div>
                            <h3 class="plantTitle">Bell Pepper</h3>
                            <p class="plantDesc">Bell peppers are colorful, sweet vegetables rich in vitamins, used in salads, stir-fries, and roasting.</p>
                        </div>
                        <div class="plantCat"><p>Fruits & Vegetables</p></div>    
                    </div>
                </div>
            </div>

            <div class="filter">
                <h2>Filter and Discover</h2>
                <nav class="section__nav">
                    <ul class="section__list">
                        <li class="section__item"><button class="list__button" data-category="all">All Plants</button>
                        <li class="section__item"><button class="list__button"
                                data-category="Fruits & Vegetables">Fruits & Vegetables</button></li>
                        <li class="section__item"><button class="list__button" data-category="Herbs">Herbs</button></li>
                        <li class="section__item"><button class="list__button" data-category="Trees & Shrubs">Trees &
                                Shrubs</button></li>
                        <li class="section__item"><button class="list__button"
                                data-category="Flowering Plants">Flowering Plants</button></li>
                        <li class="section__item"><button class="list__button" data-category="Indoor Plants">Indoor
                                Plants</button></li>
                        
                        </li>
                    </ul>
                    <div class="main__search">
                        <input class="search-input" type="text" placeholder="Search for your Plant">
                        <button class="search-button">
                            <svg class="search-logo" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.6725 16.6412L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                                    stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </nav>

                <div class="grid-group" id="allPlants">
                </div>


                <div class="modal" style="display: none;">
                    <span class="close">&times;</span>
                    <h1>Plant Report</h1>
                    <div class="plant-details">
                        <div class="plant-details__group">
                            <div class="plant-details__img"></div>
                            <div class="plant-information">
                                <div>
                                    <h3><span></span><span></span></h3>
                                    <p class="plant-description"></p>
                                </div>
                                <div class="plant-specific-info">
                                    <p>-<span class="highlight">Sunlight Requirements:</span><span id="sunlight"></span></p>
                                    <p>-<span class="highlight">Watering Needs:</span><span id="watering"></span></p>
                                    <p>-<span class="highlight">Optimal Temperature:</span><span id="temperature"></span></p>
                                    <p>-<span class="highlight">Soil Type:</span><span id="soil"></span></p>
                                    <p>-<span class="highlight">Soil pH:</span><span id="soilPH"></span></p>
                                    <p>-<span class="highlight">Pests & Diseases:</span><span id="pestsDeseas"></span></p>
                                    <pre>-<span class="highlight">Common Problems & Solutions:</span><br> <span id="problems"></span></pre>
                                    <p>-<span class="highlight">Time to Maturity:</span><span id="maturityTime"></span></p>
                                    <p>-<span class="highlight">Uses:</span><span id="uses"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="print-btn" onclick="window.print()">Print Report</button>

                    <div class="colored">
                    </div>
                </div>

                <p class="more">See more</p>
            </div>
        </section>
    </main>

    <footer class="footer">
        <nav class="footer__nav">
            <ul class="footer__list">
                <div>
                    <li><a href="#About Us">About Us</a></li>
                    <li><a href="mailto:waelcoding12@gmail.com">Feedback</a></li>
                    <li><a href="#Trust, Safety & Security">Trust, Safety & Security</a></li>
                </div>
                <div>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="mailto:waelcoding12@gmail.com">Support</a></li>
                    <li><a href="https://www.reddit.com/r/farming/" target="_blank" >Community</a></li>
                </div>
                <div>
                    <li><a href="diagnose.php">Plant Diagnosis</a></li>
                    <li><a href="plant-base.php">Plants Database</a></li>
                    <li><a href="weather.php">Weather</a></li>
                </div>
                
            </ul>
        </nav>
        <div>
        </div>
        <div class="social">
            <p>Our Socials</p>
            <a href="https://github.com/WaelBenseghir">
                <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 20 20">
                    <path fill="#fff" fill-rule="evenodd"
                        d="M10 0c5.523 0 10 4.59 10 10.253 0 4.529-2.862 8.371-6.833 9.728-.507.101-.687-.219-.687-.492 0-.338.012-1.442.012-2.814 0-.956-.32-1.58-.679-1.898 2.227-.254 4.567-1.121 4.567-5.059 0-1.12-.388-2.034-1.03-2.752.104-.259.447-1.302-.098-2.714 0 0-.838-.275-2.747 1.051A9.396 9.396 0 0 0 10 4.958a9.375 9.375 0 0 0-2.503.345C5.586 3.977 4.746 4.252 4.746 4.252c-.543 1.412-.2 2.455-.097 2.714-.639.718-1.03 1.632-1.03 2.752 0 3.928 2.335 4.808 4.556 5.067-.286.256-.545.708-.635 1.371-.57.262-2.018.715-2.91-.852 0 0-.529-.985-1.533-1.057 0 0-.975-.013-.068.623 0 0 .655.315 1.11 1.5 0 0 .587 1.83 3.369 1.21.005.857.014 1.665.014 1.909 0 .271-.184.588-.683.493C2.865 18.627 0 14.783 0 10.253 0 4.59 4.478 0 10 0" />
                </svg>
            </a>
            <a href="mailto:waelcoding12@gmail.com">
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="800" height="800"
                    viewBox="0 0 512 512">
                    <path fill="#fff"
                        d="M488.22 75.724H23.78c-.669 0-1.327.046-1.982.1L44.095 90.85a19.015 19.015 0 0 1 3.802 1.966l208.104 140.243L464.103 92.816l.005-.003 25.27-17.03c-.386-.019-.767-.059-1.158-.059z" />
                    <path fill="#fff"
                        d="M404.811 178.655 266.63 271.777c-3.212 2.166-6.922 3.248-10.631 3.248s-7.419-1.083-10.631-3.248l-44.545-30.019a19.108 19.108 0 0 1-3.859-2.005L0 107.014v305.481c0 13.133 10.647 23.78 23.78 23.78h464.44c13.133 0 23.78-10.647 23.78-23.78V106.42l-107.189 72.235z" />
                </svg>
            </a>
            <a href="#facebook">
                <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 24 24">
                    <path fill="#fff"
                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                </svg>
            </a>
        </div>
        <div>
            <p class="made-by">Made by Benseghir Ouail</p>
        </div>
    </footer>

    <script src="Src/menu.js"></script>
    <script src="Src/plant-card.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO Meta Tags -->
    <title>Wheel Spinner - Spin to Win with Fun Names | LacidaWeb</title>
    <meta name="description" content="Spin the wheel and have fun with our interactive Wheel Spinner! Add names, control the speed, and see who wins. Perfect for games, giveaways, and more. Created by LacidaWeb.">
    <meta name="keywords" content="wheel spinner, spin the wheel, name spinner, fun game, interactive wheel, LacidaWeb, custom website,free wheel spinner, online wheel spinner, random wheel spinner, spin the wheel game, decision wheel spinner, customizable wheel spinner, wheel spinner tool, wheel of fortune spinner, prize wheel spinner, random picker wheel, spin to win wheel, digital wheel spinner, virtual wheel spinner, wheel spinner app, wheel spinner for decisions, wheel spinner for prizes, lucky wheel spinner, wheel spinner for games, wheel spinner for fun, wheel spinner for contests, interactive wheel spinner, wheel spinner for events, wheel spinner for giveaways, wheel spinner for raffles, wheel spinner for choices, wheel spinner for kids, wheel spinner for teachers, wheel spinner for business, wheel spinner for parties, wheel spinner for classrooms, no ads wheel spinner, free online decision maker, random choice wheel, spin wheel for free, wheel spinner no download, wheel spinner for free, wheel spinner for random selection, wheel spinner for contests, wheel spinner for rewards, wheel spinner for trivia, wheel spinner for team building, wheel spinner for icebreakers, wheel spinner for lucky draw, wheel spinner for randomizer, wheel spinner for selection, wheel spinner for winners, wheel spinner for prizes, wheel spinner for games online, wheel spinner for random picks, wheel spinner for free no signup">
    <meta name="author" content="LacidaWeb">
    
    <!-- Canonical Tag -->
    <link rel="canonical" href="https://www.lacidaweb.com/wheel-spinner" />
    
    <!-- Open Graph Tags (for social media sharing) -->
    <meta property="og:title" content="Wheel Spinner - Spin to Win with Fun Names | LacidaWeb">
    <meta property="og:description" content="Spin the wheel and have fun with our interactive Wheel Spinner! Add names, control the speed, and see who wins. Perfect for games, giveaways, and more. Created by LacidaWeb.">
    <meta property="og:image" content="https://www.lacidaweb.com/images/wheel-spinner-thumbnail.jpg">
    <meta property="og:url" content="https://www.lacidaweb.com/wheel-spinner">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Tags (for Twitter sharing) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Wheel Spinner - Spin to Win with Fun Names | LacidaWeb">
    <meta name="twitter:description" content="Spin the wheel and have fun with our interactive Wheel Spinner! Add names, control the speed, and see who wins. Perfect for games, giveaways, and more. Created by LacidaWeb.">
    <meta name="twitter:image" content="https://www.lacidaweb.com/images/wheel-spinner-thumbnail.jpg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #wheel-container {
            position: relative;
            width: 500px;
            height: 500px;
            margin: 0 auto;
        }
        #wheel {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            position: relative;
            transition: transform 0.1s linear; /* Smooth rotation */
        }
        #arrow {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 40px;
            color: red;
        }
        .name {
          position: absolute;
          top: 50%;
          left: 50%;
          width: 30px; /* Adjust width for vertical text */
          height: 250px; /* Adjust height for vertical text */
          text-align: left;
          line-height: 30px; /* Adjusted line height for better spacing */
          font-size: 12px; /* Slightly larger font size for readability */
          color: white;
          transform-origin: center center;
          writing-mode: vertical-lr; /* Make text vertical */
          text-orientation: mixed; /* Ensure text is readable */
          letter-spacing: 1px; /* Add spacing between letters */
          transform: translate(50%, 50%); /* Center the text */
      }
        #controls {
            text-align: center;
            margin-top: 20px;
        }
        #winner {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            color: green;
        }
        .form-container {
            max-width: 400px;
            margin: 0 auto;
        }
        .wheel-column {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        textarea {
            resize: vertical; /* Allow vertical resizing */
        }
        /* New CSS for the ad section */
        #ad-section {
            margin: 20px auto;
            padding: 15px;
            background-color: #f8f9fa; /* Light gray background */
            border: 1px solid #ddd; /* Light border */
            border-radius: 8px; /* Rounded corners */
            max-width: 600px; /* Limit width for better readability */
            font-family: Arial, sans-serif; /* Google-like font */
        }
        #ad-section .ad-title {
            font-size: 18px;
            font-weight: bold;
            color: #1a0dab; /* Google Ad title color */
            margin-bottom: 5px;
        }
        #ad-section .ad-url {
            font-size: 14px;
            color: #006621; /* Google Ad URL color */
            margin-bottom: 5px;
        }
        #ad-section .ad-description {
            font-size: 14px;
            color: #545454; /* Google Ad description color */
            line-height: 1.4;
        }
        /* Ribbon Animation */
#ribbons {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1000;
}

.ribbon {
    position: absolute;
    width: 20px;
    height: 100px;
    background: linear-gradient(45deg, #ff9a9e, #fad0c4, #fbc2eb, #a6c1ee, #c2e9fb, #d4fc79);
    opacity: 0;
    animation: fly 2s ease-out infinite;
}

.ribbon-1 { top: -100px; left: 10%; animation-delay: 0s; }
.ribbon-2 { top: -100px; left: 30%; animation-delay: 0.5s; }
.ribbon-3 { top: -100px; left: 50%; animation-delay: 1s; }
.ribbon-4 { top: -100px; left: 70%; animation-delay: 1.5s; }

@keyframes fly {
    0% { transform: translateY(0) rotate(0deg); opacity: 0; }
    50% { opacity: 1; }
    100% { transform: translateY(100vh) rotate(360deg); opacity: 0; }
}

/* Winner Popup */
.modal-content {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.modal-header {
    background: linear-gradient(45deg, #ff9a9e, #fad0c4);
    color: white;
    border-radius: 10px 10px 0 0;
}

.modal-title {
    font-size: 24px;
    font-weight: bold;
}

#winner-name {
    font-weight: bold;
    color: #006621;
}
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Wheel Spinner</h1>
        <div class="row">
            <!-- First Column: Form to Register Names -->
            <div class="col-md-6">
                <div class="form-container">
                    <h3>Register Names</h3>
                    <form id="name-form">
                        <div class="mb-3">
                            <label for="name-input" class="form-label">Enter Names (one per line):</label>
                            <textarea class="form-control" id="name-input" rows="5" placeholder="Enter names, one per line" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Names</button>
                    </form>
                    <hr>
                    <h4>Registered Names:</h4>
                    <ul id="name-list" class="list-group">
                        <!-- Names will be added here dynamically -->
                    </ul>
                    <button id="reset-names" class="btn btn-danger mt-3">Reset Names</button>
                    <!-- Shuffle Names Button (initially hidden) -->
                    <button id="shuffle-names" class="btn btn-warning mt-3" style="display: none;">Shuffle Names</button>
                </div>
            </div>

            <!-- Second Column: Wheel Spinner -->
            <div class="col-md-6 wheel-column">
                <!-- Placeholder for Shuffle Button in the Second Column -->
                <div id="shuffle-button-placeholder" class="mt-3"></div>

                <!-- Ad Section -->
                <div id="ad-section">
                    <div class="ad-title">LacidaWeb - Custom Website Development</div>
                    <div class="ad-url"><a href="https://lacidaweb.com" class="ad-url">www.lacidaweb.com</a></div>
                    <div class="ad-description">
                        Looking for a custom website? At LacidaWeb, I create stunning, responsive, and user-friendly websites tailored to your needs. Let's bring your vision to life!
                    </div>
                </div>

                <!-- Wheel Container -->
                <div id="wheel-container">
                    <div id="wheel"></div>
                    <div id="arrow">⬇️</div>
                </div>

                <!-- Winner Display -->
                <div id="winner"></div>

                <!-- Controls -->
                <div id="controls">
                    <label for="speed">Spin Speed:</label>
                    <input type="range" id="speed" min="1" max="10" value="5">
                    <br>
                    <label for="slowdown-time">Slowdown Time (seconds):</label>
                    <input type="number" id="slowdown-time" min="1" max="10" value="3">
                    <br>
                    <button id="spin" class="btn btn-primary mt-3">Spin</button>
                </div>

                <!-- Ad Section -->
                <div id="ad-section">
                    <div class="ad-title">DA 70+ Backlinks! for Only 0.01 per link</div>
                    <div class="ad-url"><a href="https://cartlegit.com" class="ad-url">www.cartlegit.com</a></div>
                    <div class="ad-description">
                        Our service delivers high-quality backlinks from Domain Authority (DA) 70 to DA 100 sites, including giants like Amazon, WordPress, and more!
                    </div>
                </div>
            </div>
        </div>
    </div>

 



    <!-- Winner Popup -->
<div id="winner-popup" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">🎉 Congratulations! 🎉</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>The winner is: <span id="winner-name"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Ribbon Animation -->
<div id="ribbons">
    <div class="ribbon ribbon-1"></div>
    <div class="ribbon ribbon-2"></div>
    <div class="ribbon ribbon-3"></div>
    <div class="ribbon ribbon-4"></div>
</div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            let names = []; // Array to store registered names
            const wheel = $("#wheel");
            const speedInput = $("#speed");
            const slowdownTimeInput = $("#slowdown-time");
            const spinButton = $("#spin");
            const winnerDisplay = $("#winner");
            const nameForm = $("#name-form");
            const nameInput = $("#name-input");
            const nameList = $("#name-list");
            const resetNamesButton = $("#reset-names");
            const shuffleNamesButton = $("#shuffle-names"); // Shuffle Names Button
            const shuffleButtonPlaceholder = $("#shuffle-button-placeholder"); // Placeholder for Shuffle Button
            let spinning = false;
            let rotation = 0; // Track current rotation
            let spinInterval; // For continuous spinning
            let slowdownTimeout; // For slowdown condition

            // Function to shuffle the names array
            function shuffleArray(array) {
                for (let i = array.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1)); // Random index
                    [array[i], array[j]] = [array[j], array[i]]; // Swap elements
                }
                return array;
            }

            // Function to update the wheel with registered names
            function updateWheel() {
                wheel.empty(); // Clear existing names
                const angleStep = 360 / names.length;
                const radius = 150; // Radius of the wheel
                names.forEach((name, index) => {
                    const angle = (index * angleStep) + (angleStep / 2); // Center of each slice
                    const radians = (angle * Math.PI) / 180; // Convert to radians
                    const x = radius * Math.cos(radians); // Calculate x position
                    const y = radius * Math.sin(radians); // Calculate y position

                    const nameElement = $(`<div class="name">${name}</div>`);
                    nameElement.css({
                        transform: `translate(-50%, -50%) rotate(${angle}deg) translateY(-${radius * 0.7}px)`, // Position names in their slices
                    });
                    wheel.append(nameElement);
                });

                // Update the wheel's background gradient
                wheel.css("background", generateConicGradient(names));
            }

            // Function to generate conic gradient for the wheel
            function generateConicGradient(names) {
                const colors = ["#ff9a9e", "#fad0c4", "#fbc2eb", "#a6c1ee", "#c2e9fb", "#d4fc79", "#ff9a9e", "#fad0c4"]; // Add more colors if needed
                const step = 100 / names.length;
                let gradient = "conic-gradient(";
                names.forEach((name, index) => {
                    gradient += `${colors[index % colors.length]} ${index * step}% ${(index + 1) * step}%, `;
                });
                gradient = gradient.slice(0, -2); // Remove the last comma and space
                gradient += ")";
                return gradient;
            }

            // Function to update the displayed list of names
            function updateNameList() {
                nameList.empty(); // Clear the existing list
                names.forEach(name => {
                    nameList.append(`<li class="list-group-item">${name}</li>`); // Add names to the list
                });
            }

            // Add names to the list and update the wheel
            nameForm.on("submit", function (e) {
                e.preventDefault(); // Prevent form submission
                const inputNames = nameInput.val().trim().split("\n"); // Split names by new lines
                if (inputNames.length > 0) {
                    names = inputNames.filter(name => name.trim() !== ""); // Add non-empty names to the array
                    updateNameList(); // Update the names list
                    nameInput.val(""); // Clear the input field
                    updateWheel(); // Update the wheel

                    // Show the Shuffle Names Button and move it to the second column
                    shuffleNamesButton.show();
                    shuffleButtonPlaceholder.append(shuffleNamesButton);
                }
            });

            // Reset names
            resetNamesButton.on("click", function () {
                names = []; // Clear the names array
                updateNameList(); // Update the names list
                updateWheel(); // Update the wheel
                shuffleNamesButton.hide(); // Hide the Shuffle Names Button
            });

            // Shuffle names
            shuffleNamesButton.on("click", function () {
                if (names.length > 0) {
                    names = shuffleArray(names); // Shuffle the names array
                    updateNameList(); // Update the names list
                    updateWheel(); // Update the wheel
                }
            });

            // Spin function
            function spin() {
                if (spinning || names.length === 0) return; // Don't spin if no names are registered
                spinning = true;
                spinButton.prop("disabled", true); // Disable spin button during spin

                const speed = speedInput.val();
                const slowdownTime = slowdownTimeInput.val() * 1000; // Convert to milliseconds

                // Start spinning continuously
                let spinSpeed = speed * 10; // Adjust spin speed multiplier
                spinInterval = setInterval(() => {
                    rotation += spinSpeed; // Increment rotation
                    wheel.css("transform", `rotate(${rotation}deg)`);
                }, 20); // Update rotation every 20ms

                // Start slowing down after the specified slowdown time
                slowdownTimeout = setTimeout(() => {
                    clearInterval(spinInterval); // Stop continuous spinning
                    let slowdownSpeed = spinSpeed; // Initial slowdown speed
                    const slowdownInterval = setInterval(() => {
                        if (slowdownSpeed > 0) {
                            slowdownSpeed -= 0.1; // Gradually reduce speed
                            rotation += slowdownSpeed; // Increment rotation
                            wheel.css("transform", `rotate(${rotation}deg)`);
                        } else {
                            clearInterval(slowdownInterval); // Stop slowdown
                            spinning = false;
                            spinButton.prop("disabled", false); // Re-enable spin button

                            // Determine the winning name
                            const winningAngle = 360 - (rotation % 360);
                            const angleStep = 360 / names.length;
                            const winningIndex = Math.floor(winningAngle / angleStep);
                            const winner = names[winningIndex];
                            winnerDisplay.text(`Winner: ${winner}`); // Display winner on screen

                            // Trigger congratulation effects
                            showCongratulationEffects(winner);
                        }
                    }, 40); // Update slowdown every 20ms
                }, slowdownTime);
            }

            // Function to show congratulation effects
            function showCongratulationEffects(winner) {
                // Show ribbons
                $("#ribbons").fadeIn();

                // Show winner popup
                $("#winner-name").text(winner);
                const winnerPopup = new bootstrap.Modal(document.getElementById('winner-popup'));
                winnerPopup.show();

                // Hide ribbons after popup is closed
                $("#winner-popup").on("hidden.bs.modal", function () {
                    $("#ribbons").fadeOut();
                });
            }

            // Event listeners
            spinButton.on("click", spin);
        });
    </script>



</body>
</html>
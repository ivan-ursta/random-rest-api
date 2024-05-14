# Activity Suggestion Script

This script suggests activities for relaxation based on the number of participants and the type of activity. It retrieves activity suggestions from the Bored API (http://www.boredapi.com/) and allows you to output the suggestion to the console or a file.

## Usage

1. Clone the repository:

  git clone https://github.com/ivan-ursta/random-rest-api

2. Navigate to the project directory
3. Run the script with the following command:
     php suggest.php <participants> <type> <sender>


<participants>: Number of participants (integer, 0-8)
<type>: Type of activity (string, e.g., "education", "recreational", "social")
<sender>: Method of sending the message ("file" or "console" (by default) )

example: 
  - php suggest.php 2 education file
  - php suggest.php 2 social 

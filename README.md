# WeatherMap

Develop a Weathermap with GD-Libary

Generating „Weather“
Generating „Temperatur“
Generating „Airflow“
Generating „Pollen“
Simple CSV for input, use GD-Libary to create the Picture then display the according for on each day
the map has to be generated as a Picture(GD-Libary)

On the Map of Switzerland
For each of the Next 7 Days show 4 Maps:
1. Display Weather in from of Symbols
2. Display Temperatur
2. Display the Breeze Direction and the Strength
3. Display Amount of Pollen with symbols

Gets data from a CSV as follows:

Date;Location;Weather;Temperatur;Wind;Pollen
2013-05-08;1;2;17/21;W/84;2

Date: YYYY-MM-DD
Area(Location):
1-Genf 
2-Wallis
3-Tessin
4-Graubünden
5-Zürich
6-Bern
7-Basel

Weather:
1-sun
2-clowdy
3-rain
4-thunderstorm
5-snow

Min an Max Temperatur in °C
Example: 10/12
If it is below 0 then it has to be red

Breeze:
NN-No Wind, N-North, NO-Nordeast, O-East, SO-southeast, S-south, SW-southwest, W-west, NW-northwest
(The 2 Chars are the German abriviation)

Pollen
0-None
1-slight
2-moderate
3-heavy

Please feel free and don't hesitate to change, update and improve the code.

#Contributing

Changes and improvements are more than welcome! Feel free to fork and open a pull request. Please make your changes in a specific branch and request to pull into master! If you can, please make sure the game fully works before sending the PR, as that will help speed up the process.

You can find the same information in the contributing guide.

#License

WeatherMap is licensed under the GNU General Public License v 3.0.

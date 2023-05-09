# beaver-google-fonts-local
How to load Google Fonts locally in Beaver Builder

According to BeaverBuilder support the required changes for functions.php are slightly different now, this is an attempt to document the new way.

To load google fonts locally in Beaver Builder, you have to do the following:

1. check which google fonts are loaded (check more than just the home page). I do that with Chrome inspector (Ctrl - Alt - i)

2. Got to https://gwfh.mranftl.com/fonts and
  - select the font
  - select the required weights (I usually select all)
  - change the font folder (below the generated CSS), I usually use /fonts
  - download the font ZIP file
  - copy the generated CSS code

3. Upload the font ZIP file to the /fonts folder and unzip. I do that using Plesk

4. Go to WordPress / Design / Edit Theme files

5. Open style.css of the current theme. Add the copied CSS rules from 2.

6. Open functions.php. Add the following code from functions.php at the bottom

7. Check the the fonts are loaded locally now. Often you need to close Chrome inspector and open it again to get rid of the old font files.

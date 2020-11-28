
<?php
for i in *.avi

    do TOTAL_FRAMES=$(ffmpeg -i $i -vcodec copy -acodec copy -f null /dev/null 2>&1 | grep frame | cut -d ' ' -f 1 | sed s/frame=//)

    FPS=ffmpeg -i 18_1*avi -vcodec copy -acodec copy -f null /dev/null 2>&1 | grep fps | cut -d ' ' -f 2 | sed s/fps=//

    for j in {1..3}

        do RANDOM_FRAME=$[RANDOM % TOTAL_FRAMES]

        TIME=$((RANDOM_FRAME/FPS))

        ffmpeg -ss $TIME -i $i -frames:v 1 ${i}_${j}.jpg

    done

done

?>
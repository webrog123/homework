<html>
<body>
    <h2>Session Storage</h2>
    <script type="text/javascript">
        if( sessionStorage.hits )
            sessionStorage.hits = Number(sessionStorage.hits) +1;
        else
            sessionStorage.hits = 1;
            document.write("Total Hits :" + sessionStorage.hits );
    </script>
    <p>Refresh the page to increase number of hits.</p>
    <p>Close the window and open it again and check the result.</p>
</body>
</html>
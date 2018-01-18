

 <?php
    class Artist {

        private $con;
        private $id;

        public function __construct($con, $id) {
            $this->con = $con;
            $this->id = $id;
        }

        public function getName() {

            /* code to output the artist name */
            $artistQuery = mysqli_query($this->con, "SELECT name FROM artist WHERE id='$this->id'");
            $artist = mysqli_fetch_array($artistQuery);
            return $artist['name'];
        }

    }
?>
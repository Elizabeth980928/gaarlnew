<?php


class query extends Connection
{

//Annual budget,annual report, performance agreement, performance report
  public function getReports($grouptype,$fyfrom,$fyto)
  {



      $stmt=$this->openConnection()->prepare("SELECT description ,filepath,dateuploaded FROM documents_uploaded WHERE grouptype=:grouptype AND fyfrom>=:fyfrom AND fyto<=:fyto ORDER BY dateuploaded ");
      $stmt->bindParam("grouptype", $grouptype,PDO::PARAM_STR);
      $stmt->bindParam("fyfrom", $fyfrom,PDO::PARAM_STR) ;
      $stmt->bindParam("fyto", $fyto,PDO::PARAM_STR) ;
      $stmt->execute();
      if($stmt->rowCount()>=1)

      {
        echo'<table id="advertsTable" class="table  mt-3 mx-auto">
                        <thead>
                            <tr>
                                <th scope="col" class="description-col">Description</th>
                                <th scope="col">Uploaded date</th>
                            </tr>
                        </thead>
         <tbody>';
 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

 extract($row);
 echo"<tr>";
 echo"<td><a href='../$row[filepath]' target='_blank'>$row[description]</a></td>";
 echo"<td>$row[dateuploaded]</td>";

 echo"</tr>";





}
echo' </tbody> </table>' ;
      }
else{
    echo "<h2>No documents found.</h2>";
}
  }






//Vacancies, Tender adverts and bursaries

    public function getOpportunities($grouptype)
    {



        $stmt=$this->openConnection()->prepare("SELECT description ,filepath,dateuploaded,ddate FROM documents_uploaded WHERE grouptype=:grouptype AND ddate>=current_date() ORDER BY ddate ");
        $stmt->bindParam("grouptype", $grouptype,PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount()>=1)

        {
            echo'<table id="advertsTable" class="table  mt-3 mx-auto">
                       <thead>
                            <tr>
                                <th scope="col" class="description-col">Description</th>
                                <th scope="col">Date uploaded</th>
                                <th scope="col">Closing date</th>
                            </tr>
                        </thead>
                        <tbody>';
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                extract($row);
                echo"<tr>";
                echo"<td><a href='../$row[filepath]' target='_blank'>$row[description]</a></td>";
                echo"<td>$row[dateuploaded]</td>";
                echo"<td>$row[ddate]</td>";

                echo"</tr>";





            }
            echo' </tbody> </table>' ;
        }
        else{
            echo "<h2>No documents found.</h2>";
        }
    }

    //Other Tenders

    public function getTenders($grouptype)
    {



        $stmt=$this->openConnection()->prepare("SELECT description ,filepath,dateuploaded,ddate FROM documents_uploaded WHERE grouptype=:grouptype ORDER BY ddate ");
        $stmt->bindParam("grouptype", $grouptype,PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount()>=1)

        {
            echo"<table id='customers'>
      <tr>
        <th>Description</th>
        <th>Date uploaded</th>
        <th>Closing date</th>
      </tr>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                extract($row);
                echo"<tr>";
                echo"<td><a href='../$row[filepath]' target='_blank'>ucfirst($row[description])</a></td>";
                echo"<td>$row[dateuploaded]</td>";
                echo"<td>$row[ddate]</td>";

                echo"</tr>";
            }
            echo" </table>";
        }
        else{
            echo "<h2>No documents found.</h2>";
        }
    }



//Annual budget
   /* public function getReports($fyfrom,$fyto)
    {

        $grouptype="annual report";

        $stmt=$this->openConnection()->prepare("SELECT description ,filepath,dateuploaded FROM documents_uploaded WHERE grouptype=:grouptype AND fyfrom>=:fyfrom AND fyto<=:fyto ORDER BY dateuploaded ");
        $stmt->bindParam("grouptype", $grouptype,PDO::PARAM_STR);
        $stmt->bindParam("fyfrom", $fyfrom,PDO::PARAM_STR) ;
        $stmt->bindParam("fyto", $fyto,PDO::PARAM_STR) ;
        $stmt->execute();
        if($stmt->rowCount()>=1)

        {
            echo"<table id='customers'>
  <tr>
    <th>Description</th>
    <th>Date uploaded</th>
    
  </tr>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                extract($row);
                echo"<tr>";
                echo"<td><a href='../$row[filepath]' target='_blank'>$row[description]</a></td>";
                echo"<td>$row[dateuploaded]</td>";

                echo"</tr>";





            }
            echo" </table>";
        }
        else{
            echo "<h2>No documents found.</h2>";
        }
    }*/
//Archives


    public function getArchives()
    {



        $stmt=$this->openConnection()->prepare("SELECT description ,filepath,dateuploaded,ddate FROM documents_uploaded WHERE (grouptype='advertised_tender' OR grouptype='rfq') AND ddate<current_date() ORDER BY ddate ");

        $stmt->execute();
        if($stmt->rowCount()>=1)

        {
            echo'<table id="advertsTable" class="table  mt-3 mx-auto">
            <thead>
                 <tr>
                     <th scope="col" class="description-col">Description</th>
                     <th scope="col">Date uploaded</th>
                     <th scope="col">Closing date</th>
                 </tr>
             </thead>
             <tbody>';
 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

     extract($row);
     echo"<tr>";
     echo"<td><a href='../$row[filepath]' target='_blank'>$row[description]</a></td>";
     echo"<td>$row[dateuploaded]</td>";
     echo"<td>$row[ddate]</td>";

     echo"</tr>";





 }
 echo' </tbody> </table>' ;
        }
        else{
            echo "<h2>No documents found.</h2>";
        }
    }

//opportunities archives

    public function getOld()
    {



        $stmt=$this->openConnection()->prepare("SELECT description ,filepath,dateuploaded,ddate FROM documents_uploaded WHERE (grouptype='vacancies' OR grouptype='bursary') AND ddate<current_date() ORDER BY ddate ");

        $stmt->execute();
        if($stmt->rowCount()>=1)

        {
            echo"<table id='customers'>
  <tr>
    <th>Description</th>
    <th>Date uploaded</th>
    <th>Closing date</th>
  </tr>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                extract($row);
                echo"<tr>";
                echo"<td><a href='../$row[filepath]' target='_blank'>$row[description]</a></td>";
                echo"<td>$row[dateuploaded]</td>";
                echo"<td>$row[ddate]</td>";

                echo"</tr>";





            }
            echo" </table>";
        }
        else{
            echo "<h2>No documents found.</h2>";
        }
    }

    //Media items,other documents

    public function getDocs($grouptype)
    {



        $stmt=$this->openConnection()->prepare("SELECT description ,filepath,dateuploaded FROM documents_uploaded WHERE grouptype=:grouptype  ORDER BY dateuploaded DESC ");
        $stmt->bindParam("grouptype", $grouptype,PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount()>=1)

        {
            echo"<table id='customers'>
  <tr>
    <th>Description</th>
     <th>Date uploaded</th>
    

  </tr>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                extract($row);
                echo"<tr>";
                echo"<td><a href='../$row[filepath]' target='_blank'>$row[description]</a></td>";

                echo"<td>$row[dateuploaded]</td>";

                echo"</tr>";





            }
            echo" </table>";
        }
        else{
            echo "<h2>No documents found.</h2>";
        }
    }




    //Search

    public function getSearch($find)
    {


            $stmt = $this->openConnection()->prepare("SELECT description ,filepath,dateuploaded FROM documents_uploaded WHERE description  LIKE concat('%',:find,'%') ORDER BY description");
            $stmt->bindParam("find", $find, PDO::PARAM_STR);
            $stmt->execute();
            if ($stmt->rowCount() >= 1) {
                echo "<table id='customers'>
  <tr>
    <th>Description</th>
    <th>Date uploaded</th>
    
  </tr>";
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                    extract($row);
                    echo "<tr>";
                    echo "<td><a href='../$row[filepath]' target='_blank'>$row[description]</a></td>";
                    echo "<td>$row[dateuploaded]</td>";



                    echo "</tr>";


                }

                echo " </table>";
            }

            else

            {

                    echo "<h2>Sorry , no match.</h2>";

            }


    }

//end of class
}

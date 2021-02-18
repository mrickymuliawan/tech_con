 <?php include('../database/connection.php'); ?>
 <?php include('../components/header.php'); ?>


 <div id="jetzt-div" class="container-fluid px-0">
     <row class="anmeldung-titel">
         <h3 class="pb-2">Jetzt registrieren!</h3>
     </row>
 </div>
 <div id="form-div" class="container">
     <form action='../database/register_function.php' method='POST'>
         <div class="form-row">
             <div class="col-md-6 col-xs-12">
                 <label for="inputVorname">Vorname*</label>
                 <input type="text" class="form-control" placeholder="Vorname" name='vorname' required>
             </div>
             <div class="col-md-6 col-xs-12">
                 <label for="inputNachname">Nachname*</label>
                 <input type="text" class="form-control" placeholder="Nachname" name='nachname' required>
             </div>
         </div>
         <br />
         <div class="form-row">
             <div class="form-group col-md-6 col-xs-12">
                 <label for="inputEmail4">Email*</label>
                 <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name='email' required>
             </div>
             <br />
             <div class="form-group col-md-6 col-xs-12">
                 <label for="inputPassword4">Password*</label>
                 <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name='password' required>
             </div>
         </div>
         <br />
         <div class="form-row">
             <div class="form-group col-md-6 col-xs-12">
                 <label for="inputFirma">Firma &#40;optional&#41;</label>
                 <input type="text" class="form-control" id="inputFirma" name='firma' placeholder="Firma">
             </div>
             <br />
             <div class="form-group col-md-6 col-xs-12">
                 <label for="inputState">Workshop &#40;10:00 - 11:30&#41;</label>
                 <select id="inputState" class="form-control" name="room_id">
                     <?php
                        $result = mysqli_query($link, "select * from rooms");
                        //check query
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                //if query ok, fetch the rooms and loop. Value is equal to key. 
                                echo "<option value='$row[id]'>$row[workshop_name]</option>";
                            }
                        } else {
                            echo "error at: " . mysqli_error($link);
                        }
                        ?>
                 </select>
             </div>
         </div>
         <div class="form-group">
             <div class="form-check">
                 <input class="form-check-input" type="checkbox" id="gridCheck" name="datenschutz" required>
                 <label class="form-check-label" for="gridCheck">
                     Ich stimme die Übermittlung und Verarbeitung meine Anmeldedaten zu. Mehr über die <a href="https://www.webconia.de/datenschutzerklaerung/">Datenschuterklärung</a>
                 </label>
                 <br />
             </div>
         </div>
         <button type="submit" class="btn btn-primary">Registrieren</button>
     </form>

 </div>

 <?php include('../components/footer.php'); ?>
<div id="body">
    <div id="content">
        <div class="content">
            <br/><br/><br/>
            <?php
                if(isset($data["error"]) && count($data["error"]) > 0) {
            ?>
            <div class="alert alert-danger" role="alert">
                <ul class="list-square">
                    <?php
                        foreach($data["error"] as $error) {
                    ?>
                    <li>
                        <?php echo $error; ?>
                    </li>
                    <?php } ?>

                </ul>
            </div>
            <?php

                }else if(isset($data["success"])) {
            ?>

                <div class="alert alert-success">
                    <?php echo $data["success"]; ?>
                </div>

            <?php } ?>

            <div class="row">
                  <section class="span12">
                    <h3>Kontak Kami</h3>
                    <p>You may leave us a message for any kind of business matter or personal greeting.</p>
                    <div id="contact_form">
                      <form method="post" role="form" action="<?php echo POSITION_URL; ?>">
                        <div class="row">
                          <div class="span6">
                            <table>
                                <tr>
                                    <td><label for="author">Nama Lengkap:</label></td>
                                    <td><input name="name" id="name" type="text" class="input_field"   /></td>
                                </tr>
                                <tr>
                                    <td><label for="email">Email:</label> </td>
                                    <td><input name="email" type="email" class="input_field" id="email"  /></td>
                                </tr>   

                                <tr>
                                    <td> <label for="phone">Website:</label></td>
                                    <td> <input name="website" type="url" class="input_field" id="phone" placeholder="http://" id="website" /></td>
                                </tr>
                                <tr>
                                    <td><label for="text">Isi:</label> </td>
                                    <td><textarea id="text" name="comment" rows="8"  class="required"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" value="Send" id="submit" name="submit" class="btn btn-info float_l" /></td>
                                </tr>
                            </table>
                            <!-- <label for="author">Nama Lengkap:</label> <input name="name" id="name" type="text" class="input_field"   />
                            <div class="cleaner"></div>
                            <label for="email">Email:</label> <input name="email" type="email" class="input_field" id="email"  />
                            <div class="cleaner"></div>
                            <label for="phone">Website:</label> <input name="website" type="url" class="input_field" id="phone" placeholder="http://" id="website" />
                            <div class="cleaner"></div>
                          
                          
                            <label for="text">Isi:</label> <textarea id="text" name="comment" rows="8"  class="required"></textarea>
                            <div class="cleaner"></div>

                            <input type="submit" value="Send" id="submit" name="submit" class="btn btn-info float_l" /> -->
                        
                          </div>
                        </div>
                      </form>
                    </div> 
                  </section>
                </div>
        </div>
    </div>
</div>

<br/><br/><br/>

   <!-- popup açılması için bu link yapısı gerekli -->
    <a href="#messages" rel="modal" title="3 Messages">3 Mesajınız</a>  Var<br />
            
        <div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->

            <h3>3 Mesajınız Var</h3>

            <p>
                <strong>17th May 2009</strong>Gönderen<br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
                <small><a href="#" class="remove-link" title="Remove message">Sil</a></small>
            </p>

            <p>
                <strong>17th May 2009</strong>Gönderen<br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
                <small><a href="#" class="remove-link" title="Remove message">Sil</a></small>
            </p>

            <p>
                <strong>17th May 2009</strong>Gönderen<br />
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
                <small><a href="#" class="remove-link" title="Remove message">Sil</a></small>
            </p>

            <form action="" method="post">

                <h4>Mesaj Gönder</h4>

                <fieldset>
                    <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
                </fieldset>

                <fieldset>

                    <select name="dropdown" class="small-input">
                        <option value="option1">Send to...</option>
                        <option value="option2">Tüm Kullan�c�lara</option>
                        <option value="option3">Y�neticilere</option>
                        <option value="option4">Se�ili Kullan�c�ya</option>
                    </select>

                    <input class="button" type="submit" value="Send" />

                </fieldset>

            </form>

        </div> <!-- End #messages -->

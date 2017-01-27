<style type="text/css">
    table, th, td {
                   border: 1px solid black;
            }
            
    th, td {
                   width: 120px;
                   text-align: center;
            }
</style>

    <form>
        <table>
            <tr>
                <th>Day</th>
                <th>AM</th>
                <th>PM</th>
                <th>AM & PM</th>
                <th>None</th>
            </tr>
            <tr>
                <td>Monday</td>
                <td><input type="radio" name="availMon" id="availMon1"/></td>
                <td><input type="radio" name="availMon" id="availMon2"/></td>
                <td><input type="radio" name="availMon" id="availMon3"/></td>
                <td><input type="radio" name="availMon" id="availMon4"/></td>
            </tr>
            
            <tr>
                <td>Tuesday</td>
                <td><input type="radio" name="availTues" id="availTue1"/></td>
                <td><input type="radio" name="availTues" id="availTue2"/></td>
                <td><input type="radio" name="availTues" id="availTue3"/></td>
                <td><input type="radio" name="availTues" id="availTue4"/></td>
            </tr>
            
            <tr>
                <td>Wednesday</td>
                <td><input type="radio" name="availWed" id="availWed1"/></td>
                <td><input type="radio" name="availWed" id="availWed2"/></td>
                <td><input type="radio" name="availWed" id="availWed3"/></td>
                <td><input type="radio" name="availWed" id="availWed4"/></td>
            </tr>
            
            <tr>
                <td>Thursday</td>
                <td><input type="radio" name="availThu" id="availThu1"/></td>
                <td><input type="radio" name="availThu" id="availThu2"/></td>
                <td><input type="radio" name="availThu" id="availThu3"/></td>
                <td><input type="radio" name="availThu" id="availThu4"/></td>
            </tr>
            
            <tr>
                <td>Friday</td>
                <td><input type="radio" name="availFri" id="availFri1"/></td>
                <td><input type="radio" name="availFri" id="availFri2"/></td>
                <td><input type="radio" name="availFri" id="availFri3"/></td>
                <td><input type="radio" name="availFri" id="availFri4"/></td>
            </tr>
            
            <tr>
                <td>Saturday</td>
                <td><input type="radio" name="availSat" id="availSat1"/></td>
                <td><input type="radio" name="availSat" id="availSat2"/></td>
                <td><input type="radio" name="availSat" id="availSat3"/></td>
                <td><input type="radio" name="availSat" id="availSat4"/></td>
            </tr>
            
            <tr>
                <td>Sunday</td>
                <td><input type="radio" name="availsun" id="availsun1"/></td>
                <td><input type="radio" name="availsun" id="availsun2"/></td>
                <td><input type="radio" name="availsun" id="availsun3"/></td>
                <td><input type="radio" name="availsun" id="availsun4"/></td>
            </tr>
            
            <tr>
                <td></td>
                <td colspan="2"><button onClick="submitAvailibility">Submit</button></td>
                <td colspan="2"><input type="reset" name="reset" value="Reset"/></td>
            </tr>
        </table>
        
    </form>
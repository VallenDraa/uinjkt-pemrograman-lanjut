<form action="index.php" method="GET" style="display: flex; gap: 6px;">
    <input placeholder="Cari user..." type="text" name="username" style="flex-grow: 1;">
    <input type="hidden" name="module" value="cari">
    <button>Cari</button>
</form>

<form action="./unpam/register.php" method="POST">
    <p>&nbsp;</p>

    <div style="text-align: center; font-weight: bold;">
        <h1>REGISTER</h1>
    </div>


    <table width="496" border="0" align="center">
        <tr>
            <td width="163">Nama Depan: </td>
            <td>
                <input type="text" name="namadep" />
            </td>
        </tr>
        <tr>
            <td>Nama Belakang: </td>
            <td>
                <input type="text" name="namabel" />
            </td>
        </tr>
        <tr>
            <td>Username: </td>
            <td>
                <input type="text" name="username" />
            </td>
        </tr>
        <tr>
            <td>Password: </td>
            <td>
                <input type="password" name="password" />
            </td>
        </tr>
        <tr>
            <td>Usia: </td>
            <td>
                <input type="text" name="usia" />
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin: </td>
            <td>
                <input type="text" name="jk" />
            </td>
        </tr>
        <tr>
            <td>TTL: </td>
            <td>
                <input type="text" name="ttl" />
            </td>
        </tr>
        <tr>
            <td>Email: </td>
            <td>
                <input type="email" name="email" />
            </td>
        </tr>
        <tr>
            <td>No Tel: </td>
            <td>
                <input type="text" name="notel" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <button>Submit</button>
            </td>
        </tr>
        <tr>
            <td><a href="?module=lihat">Lihat Member ---></a></td>
        </tr>
    </table>
</form>
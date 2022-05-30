<style>
    footer {
    position: absolute;
    margin-top: 500;
    width: 100%;
    height: 230px;
    background: #F6F6F6;
}

li, a{
    padding: 0px 5px;
    text-decoration: none;
    list-style: none;
    display: inline;
}

footer:hover {
    cursor: pointer;

}

.fttop {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 4% 5% 1% 5%;
}

.fttop ul {
    margin: 0;
    padding: 0;
    font-style: normal;
    font-weight: normal;
    font-size: 13px;
    color: black;
}

.sm {
    width: 13%;
    text-align: center;
}

.sm img {
    padding: 5%;
}

hr {
    box-sizing: content-box;
    margin-left: 5%;
    color: black;
    width: 90%;
}

.ftbtm {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1% 5% 1% 5%;
}

.ftbtm p {
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 17px;
    color: black;
    mix-blend-mode: normal;
    opacity: 0.75;
}

.ftbtm ul {
    margin: 0;
    padding: 0;
    font-style: normal;
    font-weight: normal;
    font-size: 13px;
    color: black;
}
</style>
<footer>
    <div class="fttop">
        <ul>
            <li>Home <a href="/"></a></li>
            <li>About <a href="/about"></a></li>
            <li>Contact <a href="{{route('contacts.create') }}"></a></li>
        </ul>
        <div class="sm">
            <img src="/images/facebook-black.svg" alt="facebook">
            <img src="/images/twitter-black.svg" alt="twitter"> 
            <img src="/images/youtube-black.svg" alt="youtube">
        </div>
    </div>
    <hr style="box-sizing: content-box; margin-left: 5%; color: #4b4b4b; width: 90%;">
    <div class="ftbtm">
        <p>©ecompos</p>
        <ul>
            <li>Terms of Service</li>
            <li>Privacy Policy</li>
        </ul>
    </div>
</footer>
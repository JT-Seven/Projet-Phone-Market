<style>

    .cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        position: relative;
        width: 100%;
        height: 1000px;
        padding-top: 40px;
        padding-bottom: 200px;
    }

    .cards .card {
        display: flex;
        flex-direction: column;
        background: #fff;
        padding: 2.6rem 3rem 0 2.6rem;
        border: 1px solid #e7ebf3;
        border-radius: 20px;
        width: 40%;
    }

    .cards .card h1 {
        font-size: 25px;
        font-weight: 500;
        font-family: BodyFont, sans-serif;
        margin-bottom: 10px;
        margin-top: 0;
        font-weight: normal;

    }

    .cards .card .city,
    .cards .card .name {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        position: relative;
    }

    .cards .card .title-comments {
        display: flex;
        flex-wrap: wrap;
        padding-top: 30px;
        width: 10%;
    }


    .cards .card h2 {
        font-size: 16px;
        color: #333;
    }

    .cards .card p {
        font-size: 15px;
        font-weight: 400;
        font-family: BodyFont, sans-serif;
        color: #757575;
    }

    .cards .card b {
        margin-left: 20px;
    }

    .cards .card .comments .comment .button,
    .cards .card .button {
        background-color: black;
        color: white;
        width: 200px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .cards .card .comments .comment .button span {
        color: white;
    }

    .cards .card .comments .comment .button:hover,
    .cards .card .button:hover {
        background-color: #434040;
    }

    .cards .card .picture {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        position: relative;
        padding-top: 60px;
        padding-bottom: 20px;
    }

    .cards .card .picture img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 1px solid #f1f1f1;
    }

    .cards .card form textarea {
        margin: 15px 0;
        padding: 10px;
        box-sizing: border-box;
        border: none;
        outline: none;
        border-bottom: 2px solid var(--text);
        transition: 0.2s;
        background: background: var(--fond);
    }

    .cards .card .comments {
        padding-top: 8px;
        height: 280px;
        overflow-y: scroll;
        overflow-x: hidden;
    }

    .cards .card .comments .comment {
        padding-top: 24px;
    }

</style>
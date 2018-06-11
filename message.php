<?php
header("Content-Type: text/html; charset=UTF-8");
$data = json_decode(file_get_contents('php://input'), true);
$content = $data["content"];

// $poolText = preg_grep("바보", $pool);

// $fl_array = preg_grep("/^(\d+)?\.\d+$/", $array);



switch($content)
{
    case "?":
    case "help":
        echo '
            {
                "message":
                {
                    "text": "명령어 목록\\n도움말: ? 혹은 help\\n1. html\\n2. head\\n3. body\\n숫자 혹은 명령어로 검색해주세요."
                }
            }';
    break;

    case "html":
    case 1:
        echo '
            {
                "message":
                {
                    "text": "html은 하이퍼텍스트 마크업 언어(HyperText Markup Language)이며,\\n웹페이지를 제작하기 위한 언어이다.\\nhtml 태그가 있어야 브라우저가 해당 파일이 html인 것을 확인하고, 태그 안에 있는 내용을 실행시킨다."
                }
            }';
    break;

    case "head":
    case 2:
        echo '
            {
                "message":
                {
                    "text": "head 태그는 페이지에서는 보이지 않는 정보인 메타 데이터를 모아둔 태그이다.\\n또, js와 css 파일의 파일을 연결한다."
                }
            }';
    break;

    case "body":
    case 3:
        echo '
            {
                "message":
                {
                    "text": "body 태그는 실질적으로 웹페이지의 내용을 작성한 태그이다.\\nhead 태그가 보이지 않는 데이터라면, body는 눈에 보이는 데이터다."
                }
            }';
    break;

    default:
        echo '
            {
                "message":
                {
                    "text": "잘못된 명령어 입니다.\\n? 혹은 help로 사용가능한 명령어를 검색해보세요."
                }
            }';
    break;
}
?>
default:scoring.tex sample.R sample sample2 algFlowChart.png colorpicker.png
	R --slave --no-save <sample.R
	pdflatex -no-file-line-error -no-halt-on-error -no-shell-escape scoring.tex
	zip -u ScoringDocuments scoring.tex scoring.pdf sample sample2 algFlowChart.png colorpicker.png sample.R sample.png Makefile hirsch3.jpg